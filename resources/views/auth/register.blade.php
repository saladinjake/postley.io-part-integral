<!-- @extends('layouts.app') -->

@section('content')




























<style>
a {
    color: #4b35ef;
    text-decoration: none;
    background-color: transparent;
}
a:hover{
    text-decoration: underline;
}
.btn-danger {
    background-color: #d71149;
    border-color: #d71149;
}

.card {
    border: none;
}

a:hover,
a:focus {
    text-decoration: none;
}
b{
    font-weight: 700;
}
.btn-group-lg>.btn,
.btn-lg {
    border-radius: none;
}

.pagecontainer__root {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

.container__header {
    background-color: #fff;
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .1);
    position: sticky;
    top: 0;
    z-index: 4;
}

.nav__appbar {
    min-height: 4rem;
    padding: .65rem 0;
}

.wrapper__header {
    height: 100%;
    z-index: 14;
    align-items: center;
    display: flex;
}

.content__container {
    height: 100%;
    max-width: calc(1440px + 12rem);
}

@media only screen and (min-width:75rem) {
    .content__container {
        padding-left: 6rem;
        padding-right: 6rem;
    }
}

.content__wrapper {
    width: 100%;
    margin: 0 auto;
    align-items: center;
    display: flex;
}

.section__content {
    display: flex;
    align-items: center;
    height: 100%;
    z-index: 1;

}

.section__left {
    flex: 1 1;
}

.header__list {
    display: flex;
    list-style-type: none;
    margin: 0;
    padding: 0;
    align-items: center;
}

.tab__link {
    color: #19191a;
}
.tab__link:hover {
    text-decoration: none;
    cursor: pointer;
    color: #6400e4;
}

.tab__logo {
    margin-left: -2.375rem;
}

.image__header {
    height: 1.6875rem;
    margin-bottom: .25rem;
}

.desktop__view {
    display: inherit;
}

.header__list li {
    padding-left: 2.375rem;
    list-style-type: none;
}

.section__right {
    justify-content: flex-end;
    flex: 1 1;
}

.basic__button {
    text-align: center;
    text-decoration: none;
    white-space: nowrap;
    vertical-align: middle;
    cursor: pointer;
    font-family: inherit;
}
.basic__button:active{
    background-image: none;
    outline: 0;
}
.basic__button:active:focus, .basic__button:focus{
    outline: none;
}
.basic__button:focus,.basic__button:hover:focus{
    text-decoration: none;
}
.btn__medium {
    display: inline-flex;
    justify-content: center;
    font-weight: 700;
    border-radius: 2px;
    -moz-user-select: none;
    padding: .375rem 1rem;
    font-size: 1rem;
    line-height: 1.5;
    min-width: 8rem;
    transition: all .1s ease-in-out;
}

.btn_purple {
    color: #fff;
    background-color: #6400e4;
    border-color: transparent;
}
.btn_purple:active , .btn_purple:hover{
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .3);
    text-decoration: none;
    color: #fff;
}
.btn_purple:active{
    color: #e6e6e6;
    background-color: #5000b6;
}
.btn_purple:focus{
    box-shadow: 0 0 0 3px rgba(100, 0, 228, .5);
}
.btn_purple.btn_outline__purple {
    color: #6400e4;
    background-color: transparent;
    border: 1px solid #6400e4;
}
.btn_purple.btn_outline__purple:hover{
    background-color: rgba(100, 0, 228, .1);
    box-shadow: none;
}
.btn_purple.btn_outline__purple:active {
    background-color: rgba(100, 0, 228, .4);
    box-shadow: none;
}
.register__btn {
    padding: 0;
}

.container__main-page {
    max-width: 90rem !important;
    margin: auto;
    width: 100%;
    padding-left: 1rem;
    padding-right: 1rem;
    position: relative;
}

@media only screen and (min-width:48rem) {
    .container__main-page {
        padding-left: 1.5rem;
        padding-right: 1.5rem
    }
}

@media only screen and (min-width:64rem) {
    .container__main-page {
        padding-left: 2rem;
        padding-right: 2rem;
    }
}

.main__content {
    flex-grow: 1;
    display: flex;
    justify-content: center;
    align-items: center;
}

@media only screen and (min-width:48rem) {
    .main__content {
        padding-top: 0;
        padding-bottom: 0;
    }
}

.spacer__container {
    margin-top: 4rem;
    margin-bottom: 4rem;
}

.pageHeading__h1 {
    font-size: 1.8rem;
    margin-bottom: 2rem;
}
.form__container{
    max-width: 96vw;
    width: 22rem;
}
.container__content-form{
    display: flex;
    flex-direction: column;
    max-width: 22rem;
}
.flex__style{
    display: flex;
}
.col__style{
    flex-direction: column;
}
.login-form__style{
    text-align: left;
    padding-bottom: 1rem;
}
.form__base{
    display: flex;
    -webkit-flex-direction: column;
    flex-direction: column;
    align-items: flex-start;
}
.screenRead__style{
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    -webkit-clip-path: inset(50%);
    clip-path: inset(50%);
    border: 0;
}
.form__group1{
    width: 100%;
}
.form__group2 {
    width: 100%;
    margin-bottom: 1.5rem;
}
.form__group3 {
    margin-bottom: 1rem;
}
.label__formGroup{
    display: block;
    font-weight: 700;
    margin-bottom: .5rem;
    line-height: 1.25rem;
}
.label__formGroup label{
    font-size: .9rem !important;
}
.input__formGroup{
    font-size: 1rem;
    text-indent: .8rem;
    padding: .8rem 0;
    outline: none;
    width: 100%;
    border: 1px solid #e9eaea;
    border-radius: 2px;
    transition: border-color .15s;
    font-weight: 400;
    box-sizing: border-box;
}
.input__formGroup:focus {
    border-color: #4c7ef3;
}
.padBottom__IfNotEmpty{
    text-align: left;
}
.container__forgot{
    position: relative;
    width: 100%;
}
.forgot__style{
    font-size: .9rem;
    color: #2e4a99 !important;
    margin-bottom: 1rem;
    font-weight: 700;
}
.btn__lg{
    display: inline-flex;
    justify-content: center;
    font-weight: 700;
    border: 1px solid transparent;
    border-radius: 2px;
    -moz-user-select: none;
    padding: .375rem 1rem;
    font-size: 1rem;
    line-height: 1.5;
    min-width: 8rem;
    transition: all .1s ease-in-out;
}
.btn__royalblue{
    color: #fff;
    background-color: #4b35ef;
    border-color: transparent;
}
.btn__royalblue:active{
    color: #e6e6e6;
    background-color: #3c2abf;
}
.btn__royalblue:active ,.btn__royalblue:hover{
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .3);
    text-decoration: none;
    color: #fff;
}
.btn__royalblue:focus{
    box-shadow: 0 0 0 3px rgba(75, 53, 239, .5);
}
.btn__xlarge{
    padding: .75rem 1.25rem;
    font-size: 1.25rem;
    line-height: 1.33333;
    min-width: 10rem;
}
.btn__submit{
    margin: 1rem 0;
    width: 100%;
}
button:focus{
    outline: 1px dotted;
    outline: 5px auto -webkit-focus-ring-color;
}
.heading__2{
    font-family:MuseoSans;
    font-weight:700;
    font-size: 1rem;
    margin-bottom: 1rem;
}
.btnContainer__social{
    padding: 0;
    display: flex;
    justify-content: space-between;
}
.btnContainer__ListItem{
    display: flex;
    justify-content: center;
    align-items: center;
    flex: 1 1 auto;
}
.btnContainer__ListItem+ .btnContainer__ListItem{
    margin-left: .5rem;
}
.btn__x-sm{
    display: inline-flex;
    justify-content: center;
    font-weight: 700;
    border: 1px solid transparent;
    border-radius: 2px;
    -moz-user-select: none;
    padding: .375rem 1rem;
    font-size: 1rem;
    line-height: 1.5;
    min-width: 8rem;
    transition: all .1s ease-in-out;
}
.btn__red{
    color: #fff;
    background-color: #f65a5b;
    border-color: transparent;
}
.btn__red:focus{
    box-shadow: 0 0 0 3px rgba(246, 90, 91, .5);
}
.btn__red:active{
    color: #e6e6e6;
    background-color: #c54849;
}
.btn__red:active,.btn__red:hover{
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .3);
    text-decoration: none;
    color: #fff;
}
.btn__social{
    transition: box-shadow .3s;
    margin-bottom: .5rem;
    background-color: #fff;
    color: #5a5b5e;
    padding: .5rem 1rem;
    text-align: left;
    border: 2px solid #e9eaea;
    display: block;
    min-width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.btn__social:active,.btn__social:focus,.btn__social:hover{
    border: 2px solid #e9eaea;
    color: #5a5b5e;
    background-color: #fff;
    box-shadow: 0 4px 15px rgba(212, 213, 214, .6);
}
.icon__social{
    transition: transform .3s ease-in;
    transition: transform .3s ease-in;
    width: 1.5rem;
}
.outLink__register{
    text-align: right;
    display: block;
    color: #6400e4;
}
.outLink__register:focus,
.outLink__register:hover{
    color: #5900cb;
}
.footer__page{
    background-color: #15141f;
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
    color: hsla(0, 0%, 100%, .6);
    width: 100%;
}
.footer__page a{
    color: hsla(0, 0%, 100%, .6) !important;
}
.footer__page li {
    color: hsla(0, 0%, 100%, .6);
}
.container__styles{
    display: flex;
    flex-direction: column;
}
@media only screen and (min-width:48rem){
    .container__styles {
        justify-content: space-between;
        flex-direction: row;
    }
    .container__styles>div {
        margin-bottom: 0;
    }
    .container__styles>div:nth-of-type(2) {
        justify-content: center;
    }
}
.container__styles > div:first-of-type , .container__styles > div:last-of-type{
    flex-basis: 25%;
}
.container__styles>div{
    margin-bottom: 1.5rem;
}
.container__styles>div:nth-of-type(2) {
    flex-basis: 50%;
    display: flex;
}
svg:not(:root) {
    overflow: hidden;
}
.linkList__styles{
    display: flex;
    flex-direction: column;
    justify-self: end;
    list-style-type: none;
    padding: 0;
    margin: 0;
}
.linkList__styles a{
    color: #141c3a;
}
@media only screen and (min-width:48rem) {
    .linkList__styles {
        flex-direction: row;
        align-items: center;
    }
    .linkList__styles>li+li{
        margin-left: 3rem;
    }
}
.social__listStyles{
    list-style-type: none;
    display: flex;
    padding: 0;
    margin: 0;
    align-items: center;
    height: 100%;
}
.social__listStyles li+li{
    margin-left: 1.5rem;
}
@media only screen and (min-width:48rem) {
    .social__listStyles {
        justify-content: flex-end;
    }
}

</style>

<div class="pagecontainer__root">

        <main class="container__main-page main__content">
            <div class="spacer__container">
                <h1 class="pageHeading__h1">Sign Up to Posted</h1>
                <div class="form__container">
                    <div class="container__content-form">
                        <div class="flex__style col__style login-form__style">
                            <form method="POST" class="form__base" action="{{ route('register') }}">

                                {{ csrf_field() }}

                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                      <ul>
                                          @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                          @endforeach
                                      </ul>
                                </div>


                                @endif

                                @if(Session::has('messagesuccess'))
                                 <p class="alert alert-info">{{ Session::get('messagesuccess') }}</p>
                               @endif

                                <legend class="screenRead__style">Sign Up</legend>
                                <div class="form__group1">

                                  <div class="form__group2 form__group3">
                                      <label for="user_login" class="Label__formGroup">
                                          username</label>
                                          @if ($errors->has('name'))
                                              <span class="help-block">
                                                  <strong>{{ $errors->first('name') }}</strong>
                                              </span>
                                          @endif
                                          <input type="text" name="name" id="name"
                                          class="input__formGroup" value=  "{{ old('name') }}"></div>

                                    <div class="form__group2 form__group3">
                                        <label for="user_login" class="Label__formGroup">Email</label>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                            <input type="text" name="email" id="email"
                                            class="input__formGroup" value=  "{{ old('email') }}"></div>



                                    <div class="form__group2 form__group3">
                                        <label for="login__user_password"
                                            class="Label__formGroup">Password</label>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                            <input type="password" name="password" id="password"
                                            class="input__formGroup" value=""></div>


                                            <div class="form__group2 form__group3">
                                                <label for="comfirm_password"
                                                    class="Label__formGroup">comfirm password</label>
                                                    @if ($errors->has('password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('comfirm_password') }}</strong>
                                                        </span>
                                                    @endif
                                                    <input type="password" name="comfirm_password" id="comfirm_password"
                                                    class="input__formGroup" value=""></div>


                                </div>
                                <div class="padBottom__IfNotEmpty"></div>
                                <div class="container__forgot">
                                    <a class="forgot__style" href="{{ route('password.request') }}">I forgot my
                                        password</a>
                                </div>
                                    <button class="basic__button btn__lg btn__royalblue btn__xlarge btn__submit"
                                    id="user_submit">Sign Up</button>
                            </form>
                        </div>
                        <div class="flex__style col__style">
                            <div>
                                <h2 class="heading__2">Sign Up with Another Account</h2>
                                <ul class="btnContainer__social">
                                    <li class="btnContainer__ListItem">
                                        <a class="basic__button btn__x-sm " href="/login/facebook">
                                            <img style="width:350px;height:100px"  src="https://i.stack.imgur.com/Ar2Uo.png">
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="outLink__register">Not a member yet? <b>Sign up free</b></a>
            </div>
        </main>

    </div>

@endsection
