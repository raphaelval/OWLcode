var topics = [
  {
    "topic": "Learning about Cplusplus",
    "summary": "The basics of Cplusplus and resources to learn more.",
    "transcript": "C++ is the successor to C. Developed in 1985 object-orientated language static and dynamic actions. C is a general-purpose language that supported machine instructions C# is the aftermath of C and C++. Developed by Microsoft in 2000, C# was made to be a much more simpler object-orientated program than C++. robustness, portability, applicable for both hosted and embedded systems. What are If/Else statements and For/While loops? You're looking at a basic function in C++ to output words into the terminal from the compiler. iostream hello world C++ is a language that requires the input, management, and output of data.",
    "title": "C++ - OWLcode",
    "link": "https://lamp.cse.fau.edu/~f2020team13/OWLcode/topics/cplusplus.php"
  },
  {
    "topic": "Learning about HTML & CSS",
    "summary": "The basics of HTML & CSS and resources to learn more.",
    "transcript": "The basic foundations of every website you see! It doesnt matter whether you're new or old, you're going need some HTML! CSS is what adds spice and style to your web page. It lets you be creative with how you want to present yourself to your audience! HTML stands for Hyper Text Markup Language and is the building blocks for creating a website. HTML tells the browser how to display your content in your code. Each element in HTML will label what is what. Hello, World From this example, you can think of CSS as an extension to your HTML code. CSS helps display the elements on your page and adds a bit of flavor and seasoning to your website.",
    "title": "HTML & CSS - OWLcode",
    "link": "https://lamp.cse.fau.edu/~f2020team13/OWLcode/topics/html-css.php"
  },
  {
    "topic": "Learning about JavaScript",
    "summary": "The basics of JavaScript and resources to learn more.",
    "transcript": "The early to mid-1990s was an important time for the internet. Key players like Netscape and Microsoft were in the midst of browser wars, with Netscape’s Navigator and Microsoft’s Internet Explorer going head to head. In September 1995, a Netscape programmer named Brandan Eich developed a new scripting language in just 10 days. It was originally named Mocha, but quickly became known as LiveScript and, finally, JavaScript. JavaScript and Java have basically nothing in common despite the misconception of them being related. Java needs to be run with executable and JavaScript runs in real time making it more dynamic. It used to be called UI glue. responsive JavaScript can change HTML content making a webpage: DOCTYPE, html tags, and body tags Hello World the internal way to utilize JavaScript with script tags src attribute where it points to an external JavaScript document code variable operator arithmetic string number float Document Object Model DOM function if else",
    "title": "JavaScript - OWLcode",
    "link": "https://lamp.cse.fau.edu/~f2020team13/OWLcode/topics/javascript.php"
  },
  {
    "topic": "Learning about Python",
    "summary": "The basics of Python and resources to learn more.",
    "transcript": "Python is a high level language that is used for general purposes. It was developed in 1991, and supports multiple programming paradigms. It was made so code was able to be written more clearly and efficiently. There are two main versions of popular that exist today, Python 2.x and Python 3.x. Because Python was made a long time ago, Python 2.x was the most developed for its time and has made coding easier. Python 3.x was made in 2008 and continues development to make Python syntax and processes easier. Python 2.x is usable with 3.x, and soon 3.x will replace popular languages like C++. You're looking a python output that displays Hello World! You're looking at two scripts, one that runs a variable, a number specifically, that equals 7 and prints it out, and a string that is printed out. Combining Numbers and Lists using Operators Looking at Variables and Data PEMDAS",
    "title": "Python - OWLcode",
    "link": "https://lamp.cse.fau.edu/~f2020team13/OWLcode/topics/python.php"
  },
]

var render = function(data) {
  var app = document.getElementById('app');
  var topicsHTMLString = '<ul>'+
    data.map(function(topic){
      return '<li>'+
              '<strong>Topic: </strong>' + topic.topic + '<br/>' +
              '<strong>Summary: </strong>' + topic.summary + '<br/>' + 
              '<strong>' + '<a href="' + topic.link + '">' + topic.title + '</a>' + '</strong><br/>' + '<hr>' +
            '</li>';
    }).join('');
    + '</ul>';

  app.innerHTML = topicsHTMLString;
}
render(topics);

var handleSearch = function(event) {
  event.preventDefault();
  // Get the search terms from the input field
  var searchTerm = event.target.elements['search'].value;
  // Tokenize the search terms and remove empty spaces
  var tokens = searchTerm
                .toLowerCase()
                .split(' ')
                .filter(function(token){
                  return token.trim() !== '';
                });
 if(tokens.length) {
  //  Create a regular expression of all the search terms
  var searchTermRegex = new RegExp(tokens.join('|'), 'gim');
  var filteredList = topics.filter(function(topic){
    // Create a string of all object values
    var topicstring = '';
    for(var key in topic) {
      if(topic.hasOwnProperty(key) && topic[key] !== '') {
        topicstring += topic[key].toString().toLowerCase().trim() + ' ';
      }
    }
    // Return topic objects where a match with the search regex if found
    return topicstring.match(searchTermRegex);
  });
  // Render the search results
  render(filteredList);
 }
};

document.addEventListener('submit', handleSearch);
document.addEventListener('reset', function(event){
  event.preventDefault();
  render(topics);
})