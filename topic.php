<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Node JS Quiz Questions">
    <meta name="keywords" content="HTML, CSS">
    <meta name="author" content="Adam H">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Node JS Topic</title>
    <!-- Icon for the webpage -->
    <link rel="icon" href="images/node_logo.webp">
    <!-- References to external responsive CSS file -->
    <link href="responsive.css" rel="stylesheet" />
    <!-- References to external CSS files -->
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/topic.css">
</head>

<body>

    <!-- Header section with -->
    <?php
	    include_once "header.inc";
    ?>

    <!-- Section with hyperlink references to the subtopics -->
    <section id="special">
        <!-- Heading hierarchical level 2 -->
        <h2>About Node.JS</h2>

        <nav id="sub_head">
            <a href="#1">What is it?</a>
            <a href="#2">Reasons for using Node</a>
            <a href="#3">What can Node do?</a>
            <a href="#4">The creator</a>
            <a href="#5">Node.js governance</a>
            <a href="#6">The dominance of Node</a>
            <a href="#7">The future of Node</a>
            <a href="#8">Related technologies</a>
            <a href="#9">Definitions</a>
        </nav>
    </section>

    <!-- Section 1 -->
    <section class="paragraph">
        <h2 class="title" id="1">What is it?</h2>

        <p> Node.js is a free, open-source environment runtime that allows <a href="#js">JavaScript</a> to run on a server. It is used to build <a href="#b-e">back-end</a> services or <a href="#api">Application Programming Interfaces (APIs)</a> that power
            client applications.<a href="#node"><sub>[1]</sub></a></p>
    </section>

    <!-- Aside -->
    <aside>
        Node.js runs on various platforms, including Windows, Linux, Unix, and Mac OS.
        <br><br> Examples include a Web App running inside a web browser or a mobile app running on a mobile device.
    </aside>

    <!-- Section 2 -->
    <section class="paragraph">
        <h2 class="title" id="2">Reasons for using Node</h2>

        <div class="table">
            <!-- Table -->
            <table>
                <caption>Pros and Cons<a href="#pros_cons"><sub>[2]</sub></a></caption>
                <tr>
                    <th class="pros">Pros</th>
                    <th class="cons">Cons</th>
                </tr>
                <tr>
                    <td class="pros_points">
                        <!-- unordered list 1 -->
                        <ul>
                            <li>Node.js has paved the way for <a href="#js">JavaScript</a> to the server side</li>
                            <li><a href="#async">Asynchronous</a></li>
                            <li>V8 Engine</li>
                            <li>Microservices architecture</li>
                            <li>Rich ecosystem</li>
                        </ul>
                    </td>
                    <td class="cons_points">
                        <!-- unordered list 2 -->
                        <ul>
                            <li>Heavy computations incapacity</li>
                            <li>Callback hell</li>
                        </ul>
                    </td>
                </tr>
            </table>
        </div>

        <p>As Node uses <a href="#async">asynchronous programming</a>, it can handle common tasks such as opening files on the server and then returning the content to the client faster than other runtimes by eliminating the waiting time during system opening
            and reading a file, and instead simply continues with the next request.<a href="#node_rise"><sub>[3]</sub></a>
        </p>

        <!-- Figure and Caption 1 -->        
        <figure class="images">
            <img src="images/node_architecture.jpg" alt="Node.js single thread can handle multiple requests">
            <figcaption>Node.js' asynchronous technology</figcaption>
        </figure>

        <p>In contrast, runtimes with <a href="#sync">synchronous programming</a>, such as <a href="#php">PHP</a> and <a href="#asp">ASP</a>, must return the content to the server before the request for the next file can be placed.<a href="#node_rise"><sub>[4]</sub></a></p>

        <!-- Figure and Caption 2 -->           
        <figure class="images">
            <img src="images/synchronous_technologies.jpg" alt="Synchronous technology thread can only had one request at a time">
            <figcaption>Synchronous technologies can only handle one request at a time</figcaption>
        </figure>

        <p>Node is ideal for building highly scalable, data-intensive, real-time applications that power client applications. It is great for prototyping and agile development and creating super-fast and highly scalable services. Additionally, Node applications
            use <a href="#js">JavaScript</a>, and as such, it allows for a cleaner and more consistent codebase when used alongside <a href="#js">JavaScript</a>. Node also has the largest ecosystem of open-source libs allowing the developer to focus on
            constructing the core of the applications rather than building the whole thing from the ground up.<a href="#js1"><sub>[5]</sub></a> </p>
    </section>

    <!-- Section 3 -->
    <section class="paragraph">
        <h2 class="title" id="3">What can Node do?<a href="#node"><sub>[6]</sub></a></h2>

        <div class="o_list">
            <!-- ordered list 1 -->
            <ol>
                <li>Generate dynamic page content</li>
                <li>Create, open, read, write, delete, and close files on the server</li>
                <li>Collect data</li>
                <li>Add, modify, and delete data in a database</li>
            </ol>
        </div>
    </section>

    <!-- Section 4 -->
    <section class="paragraph">
        <h2 class="title" id="4">The creator</h2>

        <p>Ryan Dahl initially released Node.js in May 27, 2009. His inspiration for developing the runtime arose from the problem he faced when trying to update a progress meter on a web page used for uploading files with Ruby web servers. At a glance,
            a truly simple task, which however required a truly complex solution.<a href="#cr"><sub>[7]</sub></a></p>

        <!-- Figure and Caption 3 -->    
        <figure id="ryan_dahl">
            <img src="images/ryan_dahl.jpg" alt="Ryan Dahl">
            <figcaption>Ryan Dahl, the creator of Node.JS</figcaption>
        </figure>
    </section>

    <!-- Section 5 -->
    <section class="paragraph">
        <h2 class="title" id="5"> Node.js governance</h2>

        <p>The Node.js Foundation Technical Steering Committee (TSC) is the main governing body responsible for the Node.js repo, as well as its projects, however, it ususally delegates these projects to working groups including the LTS group, Website, Streams,
            Build, Diagnostics, i18n, Evangelism, Docker, Addon API, Benchmarking, Post-mortem, Intl, Documentation, and Testing.<a href="#gov"><sub>[8]</sub></a></p>
    </section>

    <!-- Section 6 -->
    <section class="paragraph">
        <h2 class="title" id="6">The dominance of Node</h2>

        <p>There are several stats which claim Node.js' rise to dominance over the past couple of years. Such is the graph below which depicts the runtime’s dominance in the IT world as of 2019.<a href="#node_rise"><sub>[9]</sub></a></p>

        <!-- Figure and Caption 4 -->    
        <figure class="images">
            <img src="images/node.js_for_enterprises.png" alt="Node.js enterprise dominance chart">
            <figcaption>The dominance of Node.js in the IT world as of 2019</figcaption>
        </figure>

        <p>The skill to work in Node has also become very sought after in the eyes of tech giants when seeking applicants to their job advertisements, as depicted by the Indeed Job Trends chart found below.<a href="#node_rise"><sub>[10]</sub></a></p>

        <!-- Figure and Caption 5 -->    
        <figure class="images">
            <img src="images/node.js_job_trends.png" alt="Node.js job trends chart">
            <figcaption>Popularity of Node.js as outlined by Indeed Job Trends</figcaption>
        </figure>

        <p>While the chart only shows and compares the growth of the jobs requiring the individual’s knowledge in the specific coding language not the absolute number, it is still a good indication about Node.js’ tremendous growth over all other technologies.
            <a href="#node_rise"><sub>[11]</sub></a>
        </p>
    </section>

    <!-- Section 7 -->
    <section class="paragraph">
        <h2 class="title" id="7">The future of Node</h2>

        <p>While most experimental technologies receive their momentum during their startup phase, Node has appeared to diverge from this trend by established companies adopting the technology, such as Netflix, NASA, PayPal, Uber, Twitter, Yahoo and eBay.
            <a href="#sim"><sub>[12]</sub></a>
        </p>
    </section>

    <!-- Section 8 -->
    <section class="paragraph">
        <h2 class="title" id="8">Related technologies</h2>

        <div class="o_list">
            <!-- ordered list 2 -->
            <ol>
                <li>Elixir</li>
                <li>Perl</li>
                <li>Rebol</li>
                <li>Asp.net</li>
            </ol>
            
            <p>Elixir is a programming language which is used to build and maintain applications. The technology is mainly used by programmers that focus on scalability and functional programming.<a href="#elixir"><sub>[13]</sub></a></p>
            <p>Perl is a high level interpreted, general-purpose programming language originally developed for text manipulation. It is mainly used by system administration, networking, and other applications that involve user interfaces.<a href="#perl"><sub>[14]</sub></a></p>
            <p>Rebol is a cross-platform data exchange language used for representing data and metadata. It is mainly used by multimedia applications.<a href="#reb"><sub>[15]</sub></a></p>
            <p>Asp.net is an object oriented programming language that provides a framework and patterns for code organization and reuse. It is mainly used by large tech companies to make the user experience more efficient.<a href="#asp2"><sub>[16]</sub></a></p>
        </div>

    </section>

    <!-- Section 9 -->
    <section class="paragraph">
        <h2 class="title" id="9">Definitions</h2>

        <div id="def_list">
            <!-- definition list -->
            <dl>
                <dt id="api">API</dt>
                <dd>Acronym for "Application Programming Interface", is a software that allows two or more application to communicate with each other<a href="#api1"><sub>[17]</sub></a></dd>
                <dt id="asp">ASP</dt>
                <dd>Acronym for "Active Server Pages", is a Microsoft Technology program that runs inside a web server<a href="#asp1"><sub>[18]</sub></a></dd>
                <dt id="async">Asynchronous programming</dt>
                <dd>Allows for parallelization by offloading work so that it does not block the main process/thread<a href="#vs"><sub>[19]</sub></a></dd>
                <dt id="b-e">Back&#8211;end</dt>
                <dd>The part of a computer system, piece of software, etc., where data is stored or processed rather than the parts that are seen and directly used by the user<a href="#b_e"><sub>[20]</sub></a></dd>
                <dt id="js">JavaScript</dt>
                <dd>A popular scripting language mainly used on the web to enhance HTML pages and code<a href="#js2"><sub>[21]</sub></a></dd>
                <dt id="pr">Parallelization</dt>
                <dd>The process of performing independent tasks in parallel<a href="#para"><sub>[22]</sub></a></dd>
                <dt id="php">PHP</dt>
                <dd>Acronym for "Hypertext Preprocessor", is a widely-used, open source scripting language<a href="#php1"><sub>[23]</sub></a></dd>
                <dt id="run">Runtime</dt>
                <dd>The amount of time it takes for a computer program to perform a task<a href="#rt"><sub>[24]</sub></a></dd>
                <dt id="sync">Synchronous programming</dt>
                <dd>Operation tasks are performed one at a time and only when one is completed the following is unblocked<a href="#vs"><sub>[25]</sub></a></dd>

            </dl>
        </div>
    </section>

    <?php
	    include_once "topic_footer.inc";
    ?>

</body>

</html>