document.addEventListener("DOMContentLoaded", () => {
    const inputField = document.getElementById("input");
    inputField.addEventListener("keydown", (e) => {
      if (e.code === "Enter") {
        let input = inputField.value;
        inputField.value = "";
        output(input);
      }
    });
  });
  
  function output(input) {
    let product;
    $.ajax({
      url: '/get_py_script.php',
      data: {'question':input},
      type: 'POST',
      dataType: "json",
      cache: false,
      success: function(response){
       
        product =JSON.parse(response);
        
        addChat(input, product);
      },
      error: function(error){
        console.log(error);
      }
    });

    
    
    
    
    // Update DOM
   
  }
  

  // function compare(promptsArray, repliesArray, string) {
  //   let reply;
  //   let replyFound = false;
  //   for (let x = 0; x < promptsArray.length; x++) {
  //     for (let y = 0; y < promptsArray[x].length; y++) {
  //       if (promptsArray[x][y] === string) {
  //         let replies = repliesArray[x];
  //         reply = replies[Math.floor(Math.random() * replies.length)];
  //         replyFound = true;
  //         // Stop inner loop when input value matches prompts
  //         break;
  //       }
  //     }
  //     if (replyFound) {
  //       // Stop outer loop when reply is found instead of interating through the entire array
  //       break;
  //     }
  //   }
  //   return reply;
  // }
  
  function addChat(input, product) {
    const messagesContainer = document.getElementById("messages");
  
    let userDiv = document.createElement("div");
    userDiv.id = "user";
    userDiv.className = "user response";
    userDiv.innerHTML = `<img src="user.png" class="avatar"><span>${input}</span>`;
    messagesContainer.appendChild(userDiv);
  
    let botDiv = document.createElement("div");
    // let botImg = document.createElement("img");
    let botText = document.createElement("span");
    botDiv.id = "bot";
    // botImg.src = "bot-mini.png";
    //botImg.className = "avatar";
    botDiv.className = "bot response";
    botText.innerText = "Typing...";
    botDiv.appendChild(botText);
   // botDiv.appendChild(botImg);
    messagesContainer.appendChild(botDiv);
    // Keep messages at most recent
    messagesContainer.scrollTop = messagesContainer.scrollHeight - messagesContainer.clientHeight;
    botText.innerText = `${product}`;
  
  }