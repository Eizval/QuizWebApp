<form>
    <input type="text" name="username"> <br>
    <input type="password" name="Password"> <br>
    <input type="password" name="Confirm Password"> <br>
    <input type="submit" name="Submit">
    if(($_POST["Password"]) == ($_POST["Confirm Password"])){
        echo "Passwords match"
    } else {
        echo "Passwords do not match"
    }
    @csrf
</form>
<a href="{{route('quiz.index')}}">Back</a>
