@extends('app')

@section('content')
<header>
    <h1>
        Welcome to your Co-operative College course!
    </h1>
    <div class='line'></div>
</header>
<img src='img/start.svg' class='flag'>
<div class='panel'>
    <section>
        <h2>About Me</h2>
        <h3>Who am I? Why am I here?</h3>
        <p>
          In this section space has been provided for you to write, draw or stick in things that explain who you are and what you hope to get from the project. This helps us make sure you benefit from and enjoy the project. 
        </p>
    </section>
</div>

<label for="name">Name</label>
<input type="text" name="name" id="name">

<label for="who-am-i">Who am I? Where am I from? What is important to me?</label>
<textarea placeholder='Type here...' type="text" name="who-am-i" id="who-am-i"></textarea>

<label for="why-am-i-here">Why am I here and what would I like to get from the project?</label>
<textarea placeholder='Type here...' type="text" name="why-am-i-here" id="why-am-i-here"></textarea>

<h3>About Me</h3>
<p>
Use this section to upload a photo of a drawing or doodle or any pictures that represent you and who you are.
</p>

<div class='button-row'>
    <button onclick="window.location.href='/my-journey'">Next</button>
</div>
@endsection