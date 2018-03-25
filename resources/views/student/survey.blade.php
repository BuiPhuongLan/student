@extends('home')
@section('survey')
<form>

    <div class="form-group"> <!-- Radio group !-->
        <label class="control-label">What is your favorite food?</label>
        <div class="radio">
            <label>
            <input type="radio" name="fav_foods" value="pizza">
            Pizza
            </label>
        </div>
        <div class="radio">
            <label>
            <input type="radio"  name="fav_foods" value="hamburger">
            Hamburgers
            </label>
        </div>
    </div>		

    <div class="form-group"> <!-- Radio group !-->
        <label class="control-label">What is your favorite fruit?</label>
        <div class="radio">
            <label>
            <input type="radio" name="fav_foods" value="pizza">
            Xoai
            </label>
        </div>
        <div class="radio">
            <label>
            <input type="radio"  name="fav_foods" value="hamburger">
            Dau
            </label>
        </div>
        <div class="radio">
            <label>
            <input type="radio"  name="fav_foods" value="hamburger">
            Chom chom
            </label>
        </div>
        <div class="radio">
            <label>
            <input type="radio"  name="fav_foods" value="hamburger">
            Sau rieng
            </label>
        </div>
    </div>	

    {{--  <div class="form-group"> <!-- Submit button !-->
        <button class="btn btn-primary " name="submit" type="submit">Submit</button>
    </div>  --}}
    
</form>

<nav class="blog-pagination">
    {{--  <a class="btn btn-outline-primary" href="#" >Previous</a>
    <a class="btn btn-outline-primary" href="#">Next</a>  --}}
    <button class="pull-right" href="#">Next</button>
    <button class="pull-right" href="#">Previous</button>
</nav>
@endsection