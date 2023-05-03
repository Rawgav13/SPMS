function talk() {
  var know = {
    "hi" : "Hello, Welcome to the PMS App.",
    "hey" : "Hello, Welcome to the PMS App.",
    "hello" : "Hello, Welcome to the PMS App.",
    "how are you" : "Good :)",
    "assignments" : "The Assignments for the project can be viewed in the Assignment button in the Toolbar",
    "thank you" : "You're Welcome <3",
    "thanks" : "You're Welcome <3",
    "where can i find the assignments?" : "The Assignments for the project can be viewed in the Assignment button in the Toolbar",
    "upload documents" : "You can upload documents in the Review section",
    "where can i upload documents?" : "You can upload documents in the Review section",
    "where can i compile my code" : "You can compile it in the compiler in the toolbar",
    "where can i compile my code?" : "You can compile it in the compiler in the toolbar",
    "when should i submit the documents?" : "You can see the workplan in the Assignments Section",
    "by when can i submit the documents?" : "You can see the workplan in the Assignments Section",
    "have a good day" : "You too :)",
    "how can you help me?" : "I can help you by guiding you in the app :)",
    "bye" : "Okay! Will meet soon. TC:).."
  };
  
  var user = document.getElementById('userBox').value.toLowerCase(); // convert user input to lowercase
  document.getElementById('chatLog').innerHTML = user + "<br>";
  
  for (var key in know) {
    if (key.toLowerCase() === user) { // convert key to lowercase and compare
      document.getElementById('chatLog').innerHTML = know[key] + "<br>";
      return;
    }
  }
  
  document.getElementById('chatLog').innerHTML = "Sorry, I didn't understand <br>";
}
