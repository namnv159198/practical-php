<!DOCTYPE html>
<html lang="en">
@include("head")
<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url('{{asset("images/bg-01.jpg")}}');">
        <div class="wrap-login100">
            @if(Session::has("success"))
                <p style="color: green">{{Session::get("success")}}</p>
            @endif
            @if($errors->has("fail"))
                <p style="color: red">{{$errors->first("fail")}}</p>
            @endif
            <form class="login100-form validate-form" id="form-survey" action="{{url("/add-survey")}}" method="post">
                @csrf
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

                <span class="login100-form-title p-b-34 p-t-27">
						SURVEY
					</span>

                <div class="wrap-input100 validate-input" data-validate = "Enter username">
                    <input class="input100 rounded" type="text" name="studentName" placeholder="Student Name" value="{{old("studentName")}}" >
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    @if($errors->has("studentName"))
                        <p class="error" style="color:red">{{$errors->first("studentName")}}</p>
                    @endif
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Enter username">
                    <input class="input100 rounded" type="email" name="email" placeholder="Student Email" value="{{old("email")}}">
                    <span class="" data-placeholder="&#xf207;"></span>
                    @if($errors->has("email"))
                        <p class="error" style="color:red">{{$errors->first("email")}}</p>
                    @endif
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Enter username">
                    <input class="input100 rounded" type="text" name="telephone" placeholder="Student Telephone" value="{{old("telephone")}}">
                    <span class="" data-placeholder="&#xf207;"></span>
                    @if($errors->has("telephone"))
                        <p class="error" style="color:red">{{$errors->first("telephone")}}</p>
                    @endif
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Enter username">
                    <label>
                        <textarea class="input100 " type="text" name="feedback" placeholder="Feedback" style="margin-top: 0px; margin-bottom: 0px; height: 131px;"></textarea>
                    </label>
                    <span class="" data-placeholder="&#xf207;"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn button-submit" type="submit" >
                        <p onclick="alert('submit successfully')">Submit</p>
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>
<script>
    function submit(){
        $(document).ready(function () {
            $("button").click(function () {
                $("p").click()
            })
        })
    }

</script>
@include("script")

</body>
</html>
