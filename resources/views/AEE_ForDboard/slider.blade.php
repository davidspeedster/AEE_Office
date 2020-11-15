@extends('AEE_Real.layouts.master-layouts')
@section('content')
<div id="timeline">
    <ul id="dates">
    <li><a href="#1900">1900</a></li>
    <li><a href="#1944">1944</a></li>
    <li><a href="#1950">1950</a></li>
    <li><a href="#1971">1971</a></li>
    <li><a href="#1999">1999</a></li>
    <li><a href="#2001">2001</a></li>
    <li><a href="#2011">2011</a></li>
    </ul>
    <ul id="issues">
    <li id="1900">
    <img src="images/1.png" width="256" height="256" />
    <h1>1900</h1>
    <p>...</p>
    </li>
    <li id="1944">
    <img src="images/3.png" width="256" height="256" />
    <h1>1944</h1>
    <p>...</p>
    </li>
    <li id="1950">
    <img src="images/4.png" width="256" height="256" />
    <h1>1950</h1>
    <p>...</p>
    </li>
    <li id="1971">
    <img src="images/5.png" width="256" height="256" />
    <h1>1971</h1>
    <p>...</p>
    </li>
    <li id="1999">
    <img src="images/8.png" width="256" height="256" />
    <h1>1999</h1>
    <p>...</p>
    </li>
    <li id="2001">
    <img src="images/9.png" width="256" height="256" />
    <h1>2001</h1>
    <p>...</p>
    </li>
    <li id="2011">
    <img src="images/10.png" width="256" height="256" />
    <h1>2011</h1>
    <p>...</p>
    </li>
    </ul>
    <div id="grad_left"></div>
    <div id="grad_right"></div>
    </div>

@endsection
