let notifications = new Vue({
    el: '#notifications',
    data: {
      messages: {},
      messagesPerPage: 10,
      openedTimes: 0,
      showDialog: {},
      remember: false
    },
    mounted() {
      this.getMessages();
    },
    methods: {
      getMessages: function () {
        axios.get('/get-user-messages', {params: {page: 1, per_page: this.messagesPerPage}})
          .then(response => {
            this.messages = response.data;
          })
          .catch(error => console.log(error));
      },
  
      getOrSetCookieTime: function() {
        let time = this.lastOpened;
  
        if (!time) {
          let time = moment().valueOf();
          Cookies.set('lastOpenedMessages', time);
          return 0;
        }
        return time;
      },
  
      messageToggle: function() {
        let self = this;
        setTimeout(function() {
          let time = moment().valueOf();
          Cookies.set('lastOpenedMessages', time);
  
          self.openedTimes += 1;
          }, 5000);
      },
  
      isMessageNew: function(item) {
        return moment(item.releaseAt).valueOf() > this.lastOpened;
      },
  
      attemptHide: function (messageId) {
        if (Cookies.get("rememberDelete") || this.remember) return this.hideMessage(messageId);
  
        this.showDialog = messageId;
      },
  
      hideMessage: function (messageId) {
        if (this.remember) Cookies.set("rememberDelete", true);
  
        axios.post('/hide-user-message', {
          messageId: messageId
        })
          .then(response => {
            if (response.data === 'ok') {
              let newData = this.messages.data.filter(message => message._id !== messageId);
              this.messages.data = newData;
            }
          })
          .catch(error => console.log(error));
      },
  
      nextPage: function (currentPage) {
        let next = 1;
        if (currentPage < this.messages.last_page) {
          next = currentPage + 1;
        } else {
          return;
        }
  
        axios.get('/get-user-messages', {params: {page: next, per_page: this.messagesPerPage}})
        .then(response => {
          this.messages = response.data;
        })
        .catch(error => console.log(error));
      },
  
      previousPage: function(currentPage) {
        let previous = 1;
        if (currentPage > 1) {
          previous = currentPage - 1;
        } else {
          return;
        }
  
        axios.get('/get-user-messages', {params: {page: previous, per_page: this.messagesPerPage}})
        .then(response => {
          this.messages = response.data;
        })
        .catch(error => console.log(error));
      },
  
      showText(data) {
        if (!data || !data.text) return "";
  
        let text = data.text;
  
        if (Array.isArray(data.variables)) {
          for (const item of data.variables) {
            text = text.replace(`:${item.name}`, item.value);
          }
        }
  
        return text;
      },
  
      showTitle(data) {
        if (!data || !data.title) return "";
  
        let title = data.title;
  
        if (Array.isArray(data.variables)) {
          for (const item of data.variables) {
            title = title.replace(`:${item.name}`, item.value);
          }
        }
  
        return title;
      },
      generatedMarkdown(data) {
        var renderer = new marked.Renderer();
        renderer.link = function(href, title, text) {
          var link = marked.Renderer.prototype.link.apply(this, arguments);
          return link.replace("<a","<a target='_blank'");
        };
        return marked(data,{sanitize: true, renderer: renderer})
      }
    },
    computed: {
      notificationBottom: function() {
        return (this.messages.total > 10) ? 'notification-bottom' : 'notification-bottom disabled';
      },
      lastOpened: function () {
        let time = Cookies.get('lastOpenedMessages');
        return (time ? time : 0) + this.openedTimes;
      },
      lastMessageTime: function () {
        if (! this.messages ||
            ! Array.isArray(this.messages.data) ||
            ! this.messages.data[0] ||
            ! this.messages.data[0].releaseAt) return 0;
  
        return moment(this.messages.data[0].releaseAt).valueOf();
      },
      showNewMessagesDot: function () {
        return this.lastMessageTime > this.lastOpened;
      }
    },
    filters: {
      dateformat: function (value, format) {
        if (!value) {
          return '';
        }
  
        return moment(value).format(format || 'YYYY-MM-DD HH:mm:ss');
      }
    }
  });