function addTask(){
    let name = document.createElement("input");
    name.setAttribute("name", "name");
    let tag = document.createElement("input");
    tag.setAttribute("name", "tag");
    let deadline = document.createElement("input");
    deadline.setAttribute("name", "deadline");
    let submit = document.createElement('button');
    submit.setAttribute('type', 'submit');
    submit.setAttribute('id', 'submit-button');
    
    document.getElementById('add-task').appendChild(name);
    document.getElementById('add-task').appendChild(tag);
    document.getElementById('add-task').appendChild(deadline);
    document.getElementById('add-task').appendChild(submit);
    document.getElementById('submit-button').textContent = "Ok";
}


  function del(name){
      $.ajax({
        url: 'http://localhost:3000/delete.php',
        type: 'POST',
        data:{
            'name': name
        },
        success: function(response){
            console.log("succes");
        }
        });
        
        //window.location.href = 'delete.php';
    }