<div class="container">
    <div class="left-content" style="width: 60%;float: left">
        <img style="width: 100%" src="{{asset('assets/img/student.jpg')}}">
    </div>

@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>{{$message}}</strong>
</div>
@endif
@if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{error}}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="right-content" style="width: 40%;float: left;margin-top: 130px;">
        <div class="sign-in" style="width: 70%;margin: 0 auto">

            <form method="post" action="{{route('login')}}">
                <table>
                    <tr>
                        <td colspan="2"><p style="text-align: center;font-weight: bold;font-size: 50px;">Welcome Back!</p></td>
                    </tr>
                    <tr>
                        <td colspan="2"><p style="text-align: center;font-size: 20px;color: red;padding-top: 30px;padding-bottom: 30px;">Log in to your account</p></td>
                    </tr>
                    <tr>
                        <td style="font-size: 20px;">User Name</td>
                        <td>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input style="height: 40px;width: 200px;background-color: #C8CB74;border-radius: 20px;" placeholder="Type your user name" type="email" name="email" id="email">
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-top: 30px;font-size: 20px;">Password</td>
                        <td><input placeholder="Type Password" style="height: 40px;width: 200px;background-color: #C8CB74;border-radius: 20px;margin-top: 30px;" type="password" name="password" id="password"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input style="margin-top: 20px;background-color: #E51141;height: 40px;border-radius: 20px;color: white;width: 100px;font-weight: bold" type="submit" name="submit_button" value="Login" id="submit_button"></td>
                    </tr>
                    <tr>
                        <td style="padding-top: 30px;font-size: 20px;"></td>
                        <td>Don't have account?<a style="text-decoration: none" href="{{('/auth/register')}}">Sign Up instead</a></td>
                    </tr>
                </table>

            </form>
        </div>


    </div>
</div>

