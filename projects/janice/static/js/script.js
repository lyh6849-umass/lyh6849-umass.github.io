function submit_test(){
        $q_id = $('#q_id').val();
        $q_value = $('#q_value').val();
        $question_type = $('#question_type').val();
         
        if($q_id == "" || $q_value == "" || $question_type == ""){
            alert("Please complete field");
        }else{
            $.ajax({
                type: "POST",
                url: "insert",
                data:{
                    q_id: $q_id,
                    q_value: $q_value,
                    question_type: $question_type,
                    csrfmiddlewaretoken: $('input[name=csrfmiddlewaretoken]').val()
                },
                success: function(){
                    alert('Save Data');
                    $('#q_id').val('');
                    $('#q_value').val('');
                    $('#question_type').val('');
                    window.location = "/";
                }
            });
        }
    };



function new_answer(){
    var auto_clarify=$(event.target).parent().children("div").attr("class");
    if(auto_clarify=="auto"){
        var children_number=$(event.target).parent().children("div").children("div").length;
        var last_answer_id=$(event.target).parent().children("div").children("div").last().attr("id");

    } else if (auto_clarify!="auto") {
        var children_number=$(event.target).parent().children("div").length;
        var last_answer_id=$(event.target).parent().children("div").last().attr("id");
        
    }
    var parent_id=$(event.target).parent().attr("id");
    $("#print_here").append("last answer id: "+last_answer_id+"<BR>")
    $("#print_here").append(children_number+"<BR>")
    $("#print_here").append(auto_clarify+"<BR>")

    if (children_number>0){
        let an = last_answer_id.match(/(^[a-zA-Z0-9._%+-]*)(\D)(\d+)$/);
        var next_answer_number=+an[3]+1;
        var next_answer_number=('000'+next_answer_number).slice(-3);
        var next_a_id=an[1]+an[2]+next_answer_number
        if(auto_clarify=="auto"){
            $("#"+parent_id).children("div").append("<div id=\""+next_a_id+"\" style=\"margin-left:10px\"> - <input type=\"text\" name=\""+next_a_id+"\"></div>")
        } else if (auto_clarify!="auto") {
            $("#"+parent_id).append("<div id=\""+next_a_id+"\" style=\"margin-left:10px\"> - <input type=\"text\" name=\""+next_a_id+"\"></div>")
        }

    } else {
        //$().append(parent_id)
        var next_a_id = parent_id+"a001"
        $("#"+parent_id).append("<div id=\""+parent_id+"a001\" style=\"margin-left:10px\"> - <input type=\"text\" name=\""+parent_id+"a001\"></div>")
    }

    $("#"+next_a_id).append("<button type=\"button\" onclick=\"new_question()\">+Q</button>")
    $("#"+next_a_id).append("<button type=\"button\" onclick=\"d_delete()\">Del</button>")

 };

 function q_delete_ajax() {
    $q_id = $(event.target).parent().attr("id");
    $.ajax({
        type: "POST",
        url: "q_delete",
        data:{
            q_id: $q_id,
            csrfmiddlewaretoken: $('input[name=csrfmiddlewaretoken]').val()

        },
        success: function(){
            $("#"+$q_id).slideUp(10);

        }
    });
};  

function a_delete_ajax() {
    $a_id=$(event.target).parent().attr("id");
    $.ajax({
        type:'post',
        url:'a_delete',
        data:{
            a_id: $a_id,
            csrfmiddlewaretoken: $('input[name=csrfmiddlewaretoken]').val()
        },
        success:function(data){
        $("#"+$a_id).slideUp(10);
        }
        }); 
};     



function d_delete(){
    var id=$(event.target).parent().attr("id");
    $("#"+id).remove();
};


