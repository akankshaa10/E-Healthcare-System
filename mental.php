<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-jrIk-bmQoHas-E5tYFBElptHoUrvVNX3QBu7WEoEU6DevusEC0HW4UxTvkNxaOFnj3Y&usqp=CAU");
  
  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(5px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.6); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}
button {
  background-color:  DodgerBlue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: DodgerBlue;
}

a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #4CAF50;
  color: white;
}

.round {
  border-radius: 50%;
}
</style>
</head>
<body>
 
<div class="bg-image"></div>

<div class="bg-text">
   <FORM ACTION="https://www.eventbrite.com/e/medicare-101-april-20-2021-registration-146662418241?aff=ebdssbonlinesearch">
  <h1 style="font-size:50px">MENTAL HEALTHCARE ONLINE SEMINAR</h1>
  <p>Mental health issues are becoming increasingly common in the Australian community, effecting people of all ages, backgrounds, genders and abilities without discrimination. While these problems are often considered 'taboo', the best way to help those who are suffering with some form of mental health issue is to be informed and aware of the problem and how it can manifest.<BR>

A mental health awareness course is a great way to go about this, arming you with an array of skills and knowledge that will ensure you are better equipped to support those around you. Here are 4 benefits of taking one of these courses…<BR>

​Provides a better understanding of how mental illness can affect a person's life<BR>

Mental illness such as depression, anxiety, Obsessive Compulsive Disorder and psychosis can affect every aspect of a person's life – and unfortunately, this is a fact that many people are still not aware of. Attending a course on mental health will give you the ability to see just how pervasive the problem can be to those who are experiencing it, and will allow you to develop a different perspective on all the ways that it can influence their lives.<BR>

It can help to reduce the stigma of mental illness<BR>

As mentioned earlier, mental illness isn't widely talked about in many communities due to a lasting stigma that surrounds it. This stigma predominately comes from a lack of information, something that mental health awareness courses are helping to change. As more and more people choose to educate themselves with these opportunities, we will hopefully see a change in the way it is talked about in the community.<br><br><br><br> </p>
   <button type="submit">   
   VIEW DETAILS ABOUT ONLINE SEMINAR</a></button><BR><BR>
   <a href="seminar.php" class="previous round">&#8249;</a>
<a href="ayurved.php" class="next round">&#8250;</a>
 
</div>

</body>
</html>
