@extends('dashboard.navbar')
 
@section('content')
 

<div class="container-fluid">
    <div id="main-container">
        <div class="container">
             <h3>Messages</h3>
             
             <div class="container">
                 <br>
                 <div class="message-info">
                 <div class="message-head">
                     <p style="color: #1e2b35 !important; font-size: 18px !important;"><b><small>From: Admin</small></b></p>
                     <p><b>Title: {{$show->title}}</b> <br> <span class="date-time"><b>{{$show->created_at->format('d/m/Y')}} </b> <b style="margin-left: 10px;">{{$show->created_at->format('g-i-s')}}</b></span></p>
                 </div>

                 <div class="message-body">
                     <p>{!!$show->body!!}</p>
                  </div>
             </div>

             <style>

.date-time {
   float: right;
}

.message-head p {
    font-size: 16px;
}

 
</style>
             <!-- <table class="table-responsive table-bordered">
                 <tr>
                     <th><b>{{$show->title}}</b></th>
                     <th><b>Date</b></th>
                     <th><b>Time</b></th>
                 </tr>
                 <tr> 
                     <td>{!!$show->body!!}</td>
                     <td>{{$show->created_at->format('d-m-Y')}} </td>
                     <td>{{$show->created_at->format('g-i-s')}} </td>
                 </tr>
             </table> -->
             </div>

             <style>
                 .table-bordered tr th{
                      padding: 15px;
                      font-size: 17px;
                 }

                 .table-bordered tr td {
                     padding: 15px;
                 }
             </style>

        </div>
    </div>
</div>
 
    <script type="text/javascript">
    $(document).ready(function () {
      $('.message-toggle').on('click', function (e) {
        $('.side-notification-overlay').toggleClass('opened');
        $('.side-notification').toggleClass('opened');
        $('body').toggleClass('overflow-hidden');
        e.preventDefault();
      });
    });
    </script>

 

             <style>
                 .table-bordered tr th{
                      padding: 15px;
                      font-size: 17px;
                 }

                 .table-bordered tr td {
                     padding: 15px;
                 }
             </style>
 
<script type="text/javascript">
    $(document).ready(function() {
      $('.hp ul a').click(function() {
        var sel = $(this).attr('data-option');
        if (sel == '-') {
          $('.hp-val').val('');
          $('.hp-holder').show();
  
        } else {
          $('.hp-val').val(sel);
          $('.hp-holder').hide();
        }
      });
  
      $('h5').popover();
  
    });
  </script>
  </header> 
  
 @endsection