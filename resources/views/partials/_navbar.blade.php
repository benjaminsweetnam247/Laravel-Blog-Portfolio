<?php
namespace App\Http\Controllers;
use Auth;
?>
<nav class="{{ AUTH::check()? "admin":"normal" }}">
    <li><a href="/"> Home</a></li>
    <li><a href="/about"> About Me</a></li>
    <li><a href="/gallery"> Gallery</a></li>
    @if(AUTH::check())
        <li><a href="/contact"> Check Mail</a></li>
        <li><a href="/blog/create"> Create Blog Article</a></li>
        <li><a href="/gallery/create"> Create Gallery Image</a></li>
        <li><a href="/auth/logout"> Logout</a></li>
        {{--<li><a href="/auth/register"> Register</a></li>--}}
    @else
        <li><a href="/contact/create"> Contact Me</a></li>
        <li><a href="/auth/login"> Login</a></li>
    @endif
</nav>
