@extends('dashboard.navbar')
 
@section('content')



    <style>
        @media (max-width: 800px) {
             .profile {
               margin-bottom: -50px !important;
            }

            .profile img {
                margin-left: 50px !important;
            }

           .profile p {
               margin-left: 40px !important;
           }

           .profile .btn-primary {
               margin-left: 30px !important;
           }
           
           .start-mining {
               margin-bottom: -50px !important;
           }
           .navbar-nav {
               max-height: 400px !important;
               overflow: auto !important;
           }
        }
    </style>
    
    <script src="js/vue-2.5.16.min.js"></script>
    <script src="js/axios-0.18.0.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/marked.js"></script>
    <script src="js/js.cookie.min.js"></script>
    <script src="js/notifications.js"></script>
    <script type="text/javascript">
    $(document).ready(function () {
      $('.message-toggle').on('click', function (e) {
        $('.side-notification-overlay').toggleClass('opened');
        $('.side-notification').toggleClass('opened');
        $('body').toggleClass('overflow-hidden');
        e.preventDefault();
      });
    });
    </script></header>


<div class="container-fluid">
<div id="main-container">
    <div class="container">
    @include('flash::message')
    @error('password')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                @error('password_confirmation')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <div id="mma-flash" class="mma">
                <div class="row">
                    
                                            <div class="col-sm-12">

                                                        
                                                                                                                        
                                <p></p>
                                                                                                                </div>
                    
                                        


                                        
                                            <div class="col-sm-12"></div>
                                    </div>
            </div>
                
<div id="myaccount" class="mma mma-bc1 fos">
    <div class="row">

        <h2 class="col-sm-12"><span></span>My account            <small class="fos">Update your personal information.</small>
        </h2>
        <ul class="nav nav-tabs" id="settingsTabs">
            <li class="active col-xs-6 col-sm-6 col-md-6 col-lg-3"><a href="#general" data-form="generalForm"
                                                                      class="main-menu" data-toggle="tab"><i
                            class="fa fa-user"></i>General Information</a></li>
            <!-- <li class="col-xs-6 col-sm-6 col-md-6 col-lg-3"><a href="#security" data-form="securityForm"
                                                               class="main-menu" data-toggle="tab"><i
                            class="fa fa-lock"></i>2Factor Auth</a></li> -->
            <li class="col-xs-6 col-sm-6 col-md-6 col-lg-3"><a href="#password" data-form="passwordForm"
                                                               class="main-menu" data-toggle="tab"><i
                            class="fa fa-refresh"></i>Change password</a></li>
                        <!-- <li class="col-xs-6 col-sm-6 col-md-6 col-lg-3"><a href="#wallets" data-form="walletsForm" class="main-menu"
                                                               data-toggle="tab"><i
                            class="fa fa-folder-open"></i>Wallets</a></li> -->
        </ul>

        <div class="tab-content" id="settings-tab-content">
            <div class="tab-pane fade in active" id="general">
                <form action="/othersettings" id="generalForm" method="post" accept-charset="utf-8">   
                @csrf
                <div class="col-sm-6"><div class="form-group required"><label for="UserEmail">Email</label><input name="email" class="form-control" placeholder="Email" disabled="disabled" type="text" value="{{Auth::user()->email}}" id="UserEmail"/></div></div>
                <div class="col-sm-6"><div class="form-group"><label for="UserBackupEmail">DoB</label><input name="day_of_birth" class="selectpicker form-control" data-size="13" id="UserDateOfBirthDay"  type="date" value="{{Auth::user()->dob,  date('Y-m-d')}}" id="UserBackupEmail"/></div></div>
                <div class="col-sm-6"><div class="form-group"><label for="UserFirstName">Full Name</label><input name="name" class="form-control" value="{{Auth::user()->name ?? 'Enter Full Name'}}" type="text" id="UserFirstName"/></div></div>
                <div class="col-sm-6"></div>
               
                <div class="col-sm-6"><div class="form-group"><label for="UserMobile">Mobile Phone</label><input name="mobile" class="form-control" value="{{Auth::user()->mobilenumber ?? 'Enter Phone Number'}}" type="text" id="UserMobile"/></div></div>

                <div class="col-sm-6"><div class="form-group"><label for="wallet_address">Wallet Address</label><input name="wallet_address" class="form-control" value="{{Auth::user()->wallet_address ?? 'Enter Wallet Address'}}" type="text" id="wallet_address"/></div></div>

                <div class="col-sm-6">
                    <div class="checkbox">
                        <label><input type="hidden" name="newsletter" id="UserNewsletter_" value="0"/><input type="checkbox" name="newsletter"  class="checkbox-inline" value="1" id="UserNewsletter" checked="checked"/>Receive our Newsletter?</label>
                    </div>
                </div>
                <input type="hidden" name="data[User][form_type]" value="generalForm" id="UserFormType"/><div style="display:none;"><input type="hidden" name="data[_Token][fields]" value="e89f101581ff41fe4593a56ab96b7a6f5d46ba20%3AUser.id" id="TokenFields1525775260"/><input type="hidden" name="data[_Token][unlocked]" value="User.form_type%7Cg-recaptcha-response" id="TokenUnlocked546290986"/></div></form>            </div>

           

            <div class="tab-pane fade in" id="password">
                <form action="/passwordchange" id="passwordForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"/>
                @csrf
                </div>                <div class="col-lg-5">
                    <div class="form-group"><label for="UserChangePassword">Change Password</label><input name="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Please enter your new password" type="password" id="UserChangePassword"/>
                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                
                </div>                    <div class="form-group required"><label for="UserRepeatPassword">Repeat Password</label><input name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Confirm your new password" type="password" id="UserRepeatPassword" required="required"/>
            
                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>                </div>
                <div class="col-lg-7">
                    <p>Password must be at least 8 characters long.</p>
                </div>
                <div class="clearfix"></div>
                <input type="hidden" name="data[User][form_type]" value="passwordForm" id="UserFormType"/>                <div style="display:none;"><input type="hidden" name="data[_Token][fields]" value="7af4f9efd8342260ae426325ff569ade8daae8d8%3A" id="TokenFields1943280076"/><input type="hidden" name="data[_Token][unlocked]" value="User.form_type%7CUser.form_type%7CUser.form_type%7Cg-recaptcha-response%7Cg-recaptcha-response%7Cg-recaptcha-response" id="TokenUnlocked1387859768"/></div></form>            </div>

        </div>
        <div style="display:none;" id="activeFormID" data-value="generalForm"></div>

        <div class="clearfix"></div>
        <div class="col-sm-12 myaccount-btn">
            <button type="reset" id="reset" class="btn btn-primary" role="button"><i
                        class="fa fa-retweet"></i>Reset</button>
            <button type="submit" id="save" class="btn btn-warning" role="button"><i
                        class="fa fa-download"></i>Save</button>
            <span class="loader"><img
                        src="data:image/gif;base64,R0lGODlhGAAYAKUAABwaHIyOjMzKzFRWVKyurOTm5HR2dDw+PJyenNza3Ly+vPT29GRiZISChExOTJSWlNTS1LS2tOzu7KSmpCwqLFxeXERGROTi5MTGxPz+/IyKjJSSlMzOzFxaXLSytOzq7Hx6fERCRKSipNze3MTCxPz6/GRmZISGhFRSVJyanNTW1Ly6vPTy9KyqrDQyNP///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH/C05FVFNDQVBFMi4wAwEAAAAh+QQJBQAvACwAAAAAGAAYAAAG/sCXcEjMaE4ZonK5IC2EJYapJJQQWEsiyTCBVqbCRsiTHbJAhtErCuaEHJLyUGHYZKKMUsYU6jIhWGsnBgIlBiAlESEVVC8fE4ECAQ+FLxAaKlodGC8LKS4UCEILEQEBCCMZT0oLGSsWFBQGcUMXIgEpjUssIRQoHFkZEGpyEQRJQxnKy3JDJc8LeiQtBAQtK81CBwDcAAMK1R7X2S/b3QPKz8rkJdGtyEIZHx/NHwXwRCwcJAL4RCUYMHAIBEUFCQUCPqxTokeCABIkVDS6QALDhSQfBNASkpFehhEYSBSAUqARQJEZOHDIUIAfsgUls1xQsDIDRGX7LmRbEBALI0AMSVgowKArS8tML2ySQGZwpJwSMZOGRFbiQtFswiD4UxIEACH5BAkFACsALAAAAAAYABgAhRQSFIyOjMzKzExOTKyurOTm5HRydJyenNza3Ly+vPT29DQyNFxeXJSWlNTS1LS2tOzu7ISGhCwuLHx6fKSmpOTi5MTGxPz+/ERCRGRmZBweHJSSlMzOzFxaXLSytOzq7HR2dNze3MTCxPz6/JyanNTW1Ly6vPTy9KyqrExKTGxqbP///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAb+wJVwSLyQDheicqngKISjySS5Oj1OSyJn84BKqZuOKTs8bQKFVXS6KjEyEPJQEKBcRqDpZdLpLkcIT2oHAQ4jAQEXCQwGI0IQHlhtKAQlSQgHCEQCBhwrChQpGARQFigoDxV3TBciHRgYEZJCBSYoHo5ZCq8ZDlkXIRVyKwkmVEMXySPHciPOzhcOFiLTnsMrAwvaC73U1NbD2dsZycrMZNAKyUUfH8MEdlknHCIC52USABgWRCMlIgkEfFinZJmHfADgCKlATdWKDwLiDIHoTkEADQAaQCmQa8S0Ahc4cLhQoB6VAiQkKqmQYGQrEcnoCRumwIIFLB4tJDmRwEIbLjIlSwh5SeVfmmYch06jMqLCz2srojm4RyQIACH5BAkFADAALAAAAAAYABgAhRQSFIyKjMTGxFRWVOTm5KyqrHRydDQyNNTW1JyanPT29GRmZLy6vERCRHx+fMzOzFxeXOzu7LSytNze3KSipCwqLJSSlHx6fDw+PPz+/ExKTBweHMzKzFxaXOzq7KyurHR2dDQ2NNza3JyenPz6/GxubMTCxERGRISGhNTS1GRiZPTy9LS2tOTi5KSmpJSWlP///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAb+QJhwSMwUPhmicklCkIQkiyUJW5kUS6LIxYFKqRSQIDtUfAoemOI1hYlAlxV5iHAxMplvJgAyZUkETzAkLAUTJCMUJAIXKIIRDHIwLSYCLUktLC1ECCgIgxIqECxQCCYmHB4ZgkQkGRwGHRAvkkIRD5VUSwolEA4iWRkEEXMwHCasQnjLxVAkz64pApUmD80wCxonGhogKdQC1s0q3Nwgy6u6c88ZCnhFHmlzLBLJQyu4HOpEKycVA+JKmWCQ6p0SBYT8VQBBbFIlAkk8cGgoREIFBmpeHKhAAUogKNMgPnhAggKAEFhgeHBBkQilB3hO4cEAwEIzBdPkLBKQxAQigA3yyBAw8QlGBplCVABIUAyQoAzTqHh40bJZhhQp9ikJAgAh+QQJBQAsACwAAAAAGAAYAIUcGhyMjozMysxcWlzk5uSsrqw8Ojx0dnScnpzc2tz09vS8vrxMSkzU0tRsamzs7uyEhoSkpqQsKiyUlpS0trREQkTk4uT8/vzExsRUUlSUkpTMzsxkYmTs6ux8enykoqTc3tz8+vzEwsRMTkzU1tR0cnT08vSMioysqqw0NjS8urxERkT///8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAG/kCWcEi8iEQXonIZIoSEIVQhyVJsFEsiQUQSXqRUimaTHSowIhMrVJiyLAENtiy0LDaX6DQUOQmyTU8sFwIiBBcUKhcNAR+CDxhzFiIYFk8dAg9ECQgJawseByJQJEeZF1RECosQBwcoakMPG5SpSgqtGiBZFwSadA0CtoOoqHRDIcnJi2hoZMcsHhzTHCcNlJTPx9LUAcV5w4DFq0UdHcciFOEsJrTCZQoDFQ5dyKULAh3GSiZG8hUQYk2qlATTLyEqViyoEoFBhQJQnEBB48SAgSgSVjwqEEuJHTwKAABYlUECAmhnMKgJCSAJBgkpztHZUo+loBISIhwLJMSmDZAHCDpCGzQiw7ohQQAAIfkECQUAKgAsAAAAABgAGACFFBIUjI6MzMrMTE5M5ObkrK6sdHJ0nJ6c3Nrc9Pb0XF5cxMLELC4slJaU1NLU7O7stLa0fH58XFpcpKak5OLk/P78ZGZkREJEHBoclJKUzM7MVFJU7OrstLK0fHp83N7c/Pr8ZGJkxMbENDI0nJqc1NbU9PL0vLq8hIKErKqs////AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABv5AlXBIrDgcFaJyCSKAhJWFKKkClZ7LIWFRgkqpohQiO0yIFqbqOclJFRLkIWWhqUSnoNOky3QKQWcEFQJ1HykQVCYaWHMiFGwCD0QUHQRVAhkBGn8lCwuRdkwVCAcBASdwQw8aX2QgJAETFFkVBJJxCEhKdrxxQyDAwEZnZ5u+KgERHsoHDlJSxr4ZHtQeJLwVIFS+wdnbKhUcHL4CC99Dip/nZQYSEWO/nScCHBWpRAkVIu0KDWkqjQSp6DACApEFEkSoSNAhhIITf/wsZABgAogBG0BAuKAAy4MT/5QEAHABRIIRDLRZuDDhGAEMABSeHPFEw4UBt8g0AGBByBtJBlRQXOjg60GDcQtH0BTyIEXIY+BCWFhHJAgAIfkECQUALQAsAAAAABgAGACFFBIUjIqMxMbEVFZU5ObkrKqsdHJ0NDI01NbU9Pb0vLq8nJqcZGJkREJEzM7M7O7stLK0hIaE3N7cLCoslJKUXF5cfHp8/P78xMLEpKKkTEpMHB4czMrMXFpc7OrsrK6sdHZ0NDY03Nrc/Pr8vL68ZGZkREZE1NLU9PL0tLa05OLklJaUpKak////AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABv7AlnBIvJxOF6JyOSKMhBeMINlqPpdDAgYBlVIRGAJ2mBBgUFVzEiW9jlsqkuMSnV44GBXWCsV77g4jHl5CCSJXKlIqTx4CD0SNjyMIHwUiQpMYGBwPdEt0KikFBQJuLQ8OhHsQBQoeWBcEj28qElRDdLlvQyMXvU8nZmYOu0IZFMgUHydSUsTFxysUKx+5vrdvv73YFxkpuycc2EMCDQAHCWMJESAUEpAMAAATKRfpSglGAQYgLPcUADYESKfABAkiHAxwqELCAggMQh6sEFPFxIQPIxiUGEGiA4grDwTcU7JiwgBfJjT0stDh2y4PISYQG5HyCYIKJWaNyTABRBshDSqFrOigYNeDDLNoBm2BIgWaYrhAgBinJAgAIfkECQUALAAsAAAAABgAGACFHBocjI6MzMrMXFpc5ObkrK6sdHZ0REJE3Nrc9Pb0bGpsvL68nJ6chIaETE5M1NLUZGJk7O7sLCostLa0fH58TEpM5OLk/P78xMbEpKaklJKUzM7MXF5c7OrsfHp8REZE3N7c/Pr8dHJ0xMLEjIqMVFJU1NbUZGZk9PL0NDY0vLq8rKqs////AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABv5AlnBIvDweF6JyGSKEhJcRJslqPpdDwsgElVJNIwJ2mMCMUFVzEiW9jlmWxeYSnV4EIwvWCsV37hshHV5CfHBSFk8dGBFEi40XFiNhhWAjAhF0S3QdAgtbbiwRG4R7eBtomwSNbx0EVFAhIQmyb0N0uCwOALwAB7ZCEwXDBSO7vb/AwgUrxRezFwmwb7jPShcFKrYISFgCJRIfCWMhDAEZYkMRIhLhC9FMIQgMJAEq4ywMEikM4yMcGIg8aMAlhAANATYIiZChg5AEAw5MCOHBg0EDJK6g2IBPSYYDCp5xOBHiQgARI4BFqHDgAYsEJyA8AWGAQqoxBQ40KASBpBiQDCICvkGxIlWCnhpHdATG4kIDEtOWBAEAIfkECQUAKwAsAAAAABgAGACFFBIUjI6MzMrMTE5MrK6s5ObkdHJ0nJ6c3Nrc9Pb0XF5cxMLENDI0lJaU1NLUtLa07O7sfH58pKakXFpc5OLk/P78ZGZkREJEHB4clJKUzM7MVFJUtLK07OrsfHp8pKKk3N7c/Pr8ZGJkxMbENDY0nJqc1NbUvLq89PL0hIaErKqs////AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABv7AlXBIrDgcFaJyGSqEhJXFKLlqPpfDwsIElVJNiwJ2mBgtUFVzEiW9jleUhaYSnVYECwoWUhKvKmYFdxohHV5CVkIZABgZCSsdAhBEHSOTFXFhQh0KAAAMD3RLdJELW24rCxefaFgheBqTTAcPb5CCRSEhCbq2UHSiCgwkwxu+KxpSUg4iDM4Mxr7JZiNICRW8qGPAokUPI7YUIFRKDhYXE9pDIRwSJx1EECkXFwoL2EyYDyoSAo8rKi4MkPBIgAENRBCUAFHFBAEVCIRAICArhIEJC0IECGAkwIErCRCoW0FgQoQKITx4oPMhgABfECwoiJgggocnBQI0aDXmxByEBog8RLjyIIADWygetKq5UkgCASO3lShBDksQACH5BAkFAC4ALAAAAAAYABgAhRQSFIyKjMTGxExKTKyqrOTm5CwuLJyanNTW1GRmZLy6vPT29ERCRHR2dJSSlMzOzLSytOzu7KSipNze3CwqLFxeXDQ2NMTCxPz+/Hx+fBwaHIyOjMzKzFRSVKyurOzq7DQyNJyenNza3HRydLy+vPz6/ERGRHx6fJSWlNTS1LS2tPTy9KSmpOTi5P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAb+QJdwSMSkUhiichlBRYQlgSDpKhVKS+IBkBBiLhcq4lLIDgsagMCFEYRdq4sAaxZuAIzSd4rhXFpZESwfQgsGACx9DyUfclRWdBIUIAcLLhAGKkQfAk8YLWBlLh8jFBQmJBiWShgYHxwkFwh0QgIdp6tLJX4PK1kYHgp1owVUXiXIJbl1rc0uIwMmAwNdwy4PcnIp0NMm1cPYbgJIegsYtMzNxl4XHMMfxVkIGRUj6ERRAr1EKygV9Q/O6cIQwY8sOhAqJICAJUUABERaQChTYoIbUSsUPKkSYASHEhIkVGSh4lGLe0IUjNjQyoGDVgoIQBy24kSDCWw2oMBSgIAfh2VLLjRg4cUlFQEERAxbcMFXFaOFRAAdBszDuiVBAAAh+QQJBQAsACwAAAAAGAAYAIUcGhyMjozMysxUVlSsrqzk5uR0dnQ0NjScnpzc2ty8vrz09vRkYmRERkTU0tS0trTs7uyEhoSkpqScmpxcXlxEQkTk4uTExsT8/vwsKiyUkpTMzsxcWly0srTs6ux8fnw8OjykoqTc3tzEwsT8+vxkZmRMTkzU1tS8urz08vSMioysqqz///8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAG/kCWcEjEmAYYonIJCUGECwCAJCQVqMthKGOASrGnUSE79BwyG1Z0yoKMLlgyS5NBrkmYzciSTRGeLCQNGR0LIAdWIwJJaldCKxUmKwssKA0oRB4CHiwYFiNiQhARFRUUIxgpSxgYmgojJ3EsGyUVHJRZJBcjG6qrDxdyLB4ejEIYJMnJwsesrCwRDCXSH8wsAm9vDtEM3dXMAru7DsjIy8zOz0UCJ8IeBcZEIhoGEbJEury+QikSBgYqyN3rhAECNlhYRhj4gIJKAgQiMm3qJGLXGDUjfJFAECAWigcYCihitMDRkgsBQiAjQICVHj7CUmgIwInECgJUUiiAI2xDGgBMgW4yCnORzIINuEiwZETCwkA5GEDFWxIEACH5BAkFAC4ALAAAAAAYABgAhRQSFIyOjMzKzExOTKyurOTm5HRydJyenDQyNNza3PT29FxeXMTCxHx+fERCRJSWlNTS1LS2tOzu7KSmpGRmZHx6fDw+POTi5Pz+/BweHJSSlMzOzFxaXLSytOzq7HR2dKSipDQ2NNze3Pz6/GRiZMTGxISGhExKTJyanNTW1Ly6vPTy9KyqrGxqbP///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAb+QJdwSMSQKBiicrlirYQKBGIk9DwkSyLBYYJKqS4SAJUdek6OlCuKULhKgIynPJw4Whj2CGMBBLIrKlhrHBYqCgMDIyAAbUIjBWARHBQdVAwLJUQdCBEuGBcMDAVCKxoLHB8beUwYHiWiKWBCKQ0cBm5ZIwIMG4NKGAwCdC4eBUlDGCPLy8RCGNDQLigVDdV/zhsMsCUQ1BUfDRrOLgLcDBDK0Hvk0dJFEAnExshKFxMBB7NKu71PQwoiBMiXQNkSaB54MZAlREAADQKoXIhAykwJLCNEwKqoAMK/ERFYiMCwYQOkEgKQKYiUJcUEFcq2QdN2wZkCAizmBCuRJFAdiX1LErDQ9EmmkASjiClIkGsnshEXgBLDACEdsSAAIfkECQUAMAAsAAAAABgAGACFFBIUjIqMxMbEVFJUrKqs5ObkNDI0dHJ0nJqc1NbUvLq89Pb0REJEfH58LCoslJKUzM7MXF5ctLK07O7spKKk3N7cfHp8xMLE/P78TEpMZGZkHB4cjI6MzMrMrK6s7OrsNDY0dHZ0nJ6c3NrcvL68/Pr8REZEhIaELC4slJaU1NLUZGJktLa09PL0pKak5OLk////AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABv5AmHBIxIQsGKJy2WK1hCVTpiScUCZLoiKSgmamwoPDlR1OVpERbCGlChygT3koiTQwpW8JM3CIsgsCT2sHERcLKxolHg4mVDAFCFgwF0ckVB0HEFomJGscGwBdMC0uISEBKhgLSwslEgYAACuTQhUPISePTA4ADAJZGB0qczAeLrswGHh4yWXL0DAED9QpFMVCEBcC2yoEKdQPZNgd3Nyq0HvYytBJRRUvxR8F7kofCgQszkPCFxCDUAQQcMHixbIlez50IHFhxKMEBDwkSKKwFoyKyl4IIFEASoJHJRZ+wAABAoYCFzo8WlBgH4wK/vBcuLBMW7xiJbg9wcAtSR8LEgJcDkGZICBNIQkudJxT4sUjDNvcNRUaTIWqYkEAADs="/></span>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {

                
        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            $('#activeFormID').attr('data-value', e.target.getAttribute('data-form'));
        });
        $('.loader').hide();
        $('#save').click(function (e) {
            e.preventDefault();
            var activeFormID = $('#activeFormID').attr('data-value');
            var form = $('#' + activeFormID);
            form.submit();
        });
        $('#reset').click(function (e) {
            e.preventDefault();
            var activeFormID = $('#activeFormID').attr('data-value');
            var form = $('#' + activeFormID);
            form[0].reset();
        });
    });
</script>
    </div>
</div>

</div>


<div id="footer-container">
    <footer class="container">
      <div class="mma">
        <p class="fpf">
          <img src="../img/logo-black.png" alt="Cryptobitnet-logo" class="img-responsive" style="width: 60px;">
  
                          <p>Cryptobitnet Ltd., N/A 210 Midhraun 80 Garðabær Iceland</p>
      </div>
    </footer>
  </div>

  <div class="modal fade" id="ModalOutputTreshold" tabindex="-1" role="dialog" aria-labelledby="ModalOutputTresholdLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Default transaction threshold</h4>
            </div>
            <div class="modal-body">
                <ul>
                    <li><b>Cryptocurrency</b>
                        <span>Minimum transaction threshold</span></li>
                    <li><b>BTC</b> <span>0.0025 (250 000 satoshi)</span></li>
                    <li><b>BCH</b> <span>0.0015</span></li>
                    <li><b>BTG</b> <span>0.01</span></li>
                                                            <li><b>DOGE</b> <span>50</span></li>
                    <li><b>DASH</b> <span>0.001</span></li>
                    <li><b>ETH</b> <span>0.04</span></li>
                    <li><b>ETC</b> <span>0.15</span></li>
                    <li><b>REP</b> <span>0.1</span></li>
                    <li><b>LTC</b> <span>0.002</span></li>
                                        <li><b>XMR</b> <span>0.4</span></li>
                    <li><b>XMC</b> <span>4</span></li>
                    <li><b>ZEC</b> <span>0.001</span></li>
                                        <li><b>ETN</b> <span>100</span></li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>







<div id="mpo"></div>
<div id="the-loader">
    <div class="loader-content">
        <p>Your request is being processed. Please wait.</p>
                <div class="progress-line"></div>
    </div>
</div>


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

@endsection