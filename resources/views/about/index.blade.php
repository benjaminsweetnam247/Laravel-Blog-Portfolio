@extends('templates.sidebar')

@section('page-title')
    <h2>About Me</h2>
@endsection

@section('main')
    <div class="portrait">
        <img src="{{ asset('images/potrait.png') }}" alt="">
        <caption>Benjamin Orion Sweetnam</caption>
    </div>

    <div class="portfolio">
        <div class="blurb">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda autem commodi cumque, dolor eveniet illum in itaque maiores minima mollitia nam nobis nostrum pariatur placeat quisquam recusandae reprehenderit unde voluptatem?
        </div>
        <div class="study">
            <h4>Study</h4>
            <table>
                <tr>
                    <th>Course</th><th>Institute</th><th>Completed</th>
                </tr>
                <tr>
                    <td>Diploma In Website Development</td><td>Hornsby NSITafe</td><td>Nov 2014</td>
                </tr>
                <tr>
                    <td>Diploma In Science and Engineering</td><td>Insearch UTS</td><td>Mar 2010</td>
                </tr>
            </table>
        </div>
        <div class="work">
            <h4>Work</h4>
            <table>
                <tr>
                    <th>Position</th><th>Employer</th><th>Term</th><th>Finished</th>
                </tr>
                <tr>
                    <td>Bar Tender</td><td>Hornsby Railway Hotel</td><td>3 years</td><td>september 2010</td>
                </tr>
            </table>
        </div>
        <div class="hobbies">
            <h4>Hobbies</h4>
            <ul>
                <li>testing</li>
                <li>asdfasdf</li>
                <li>asdfasdfasdf</li>
                <li>asdfasdfasdf</li>
                <li>asdfasdfasdf</li>
            </ul>
        </div>
    </div>
@endsection