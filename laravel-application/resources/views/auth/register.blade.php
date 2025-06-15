<style>
    .pole{ width: 37vh;border-radius: 7vh;height: 6vh;outline-color: blueviolet;color: blueviolet;}
    .submit{width: 20vh;border-radius: 7vh;height: 7vh;color: white;background:darkblue;margin-top: 5vh;margin-left: 37vh;}
</style>

<div style="margin-left: 90vh;margin-top: 20vh;">
    <h1><i style="color: blue;margin-left: 7vh;">Registration</i></h1>
<form action="{{route('register')}}" method="post">
    @csrf
    <i style="color: purple;">Name:</i><br>
    <input type="text" name="name" class="pole"><br>
   <i style="color: purple;"> Email:</i><br>
    <input type="email" name="email" class="pole"><br>
   <i style="color: purple;"> Password:</i><br>
    <input type="password" name="password" class="pole"><br>
   <i style="color: purple;">Password_Confirmation:</i><br>
    <input type="password" name="password_confirmation" class="pole"><br>
    <input type="submit" value="Save" class="submit"><br>
</form>
</div>
