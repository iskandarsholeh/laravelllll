<!-- <style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400italic,400);
    body {
        font: normal normal 13px/16px "Open Sans", sans-serif;
        background: #dfdfdf;
    }
    
    .container {
        padding: 20px;
        width: 300px;
        margin: 0 auto;
        margin-top: 40px;
        background: white;
        border-radius: 5px;
    }
    
    form {
        display: inline-block;
    }
    
    input {
        padding: 4px 15px 4px 5px;
    }
    
    #button {
        display: inline-block;
        background-color: #fc999b;
        color: #ffffff;
        border-radius: 5px;
        text-align: center;
        margin-top: 2px;
        padding: 5px 15px;
    }
    
    #button:hover {
        cursor: pointer;
        opacity: .8;
    }
    
    ol {
        padding-left: 20px;
    }
    
    ol li {
        padding: 5px;
        color: #000;
    }
    
    ol li:nth-child(even) {
        background: #dfdfdf;
    }
    
    .strike {
        text-decoration: line-through;
    }
    
    li:hover {
        cursor: pointer;
    }
</style>

<body>
    <p> view on github https://github.com/beeeees/to-do-list </p>
    <div class="container">
        <h2>Simple To Do List</h2>
        <p><em>Click and drag to reorder, double click to cross an item off.</em></p>

        <form name="toDoList">
            <input type="text" name="ListItem" />
        </form>

        <div id="button">Add</div>
        <br/>
        <ol></ol>



    </div>
</body>
<script></script> -->


<!-- <html>
<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins');
    #wrapper {
        font-family: 'Poppins', sans-serif;
        padding: 20px;
        width: 300px;
        margin: 0 auto;
        margin-top: 40px;
        background: #E4E4E4;
        border-radius: 5px;
    }
    
    form {
        display: inline-block;
    }
    
    input {
        padding: 10px;
        width: 209px;
        border: 1px solid #0988A9;
        border-radius: 3px;
    }
    
    .bracket {
        color: #0988A9;
    }
    
    #button {
        display: inline-block;
        background-color: #0988A9;
        color: #ffffff;
        padding: 6px 15px;
        cursor: pointer;
        border: 1px solid #0988A9;
        border-radius: 3px;
    }
    
    ol {
        padding-left: 20px;
    }
    
    ol li {
        padding: 5px;
        color: #000;
    }
    
    ol li:nth-child(even) {
        background: #63cdda;
    }
    
    li:hover {
        cursor: pointer;
    }
</style>

<body>
    <div id="wrapper">
        <h2><span class="bracket">[ </span>To Do List <span class="bracket"> ]</span></h2>
        <form>
            <input type="text" name="itemName" />
        </form>

        <div id="button">Add</div>
        <br/>
        <ol></ol>
    </div>
</body>
<script>
    $(document).ready(
        function() {
            $('#button').click(
                function() {
                    var add = $('input[name=itemName]').val();
                    $('ol').append('<li>' + add + '</li>');
                });

            $("input[name=itemName]").keyup(function(event) {
                if (event.keyCode == 13) {
                    $("#button").click();
                }
            });

            $(document).on('dblclick', 'li', function() {
                $(this).toggleClass('strike').fadeOut('slow');
            });

            $('input').focus(function() {
                $(this).val('');
            });

            $('ol').sortable();

        }
    );
</script>

</html> -->



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title></title>
    <link data-require="bootstrap@3.3.6" data-semver="4.1.3" rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <script data-require="bootstrap@3.3.6" data-semver="4.1.3" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css" />
    <script data-require="jquery" data-semver="3.2.1" src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
    <script src="script.js"></script>
</head>

<body>
    <div class="col-md-12">
        <h1>Simple Todo Demo!</h1>
        <p>Click on row to delete newly added entry.</p>
        <div data-role="content">
            <ul class="list-group" id="taskListSection">
                <li class="list-group-item active">Todos</li>
                <li class="list-group-item ">1. Example of Existing task</li>
                <li class="list-group-item ">2. Example of Existing task</li>
            </ul>
            <br />
            <fieldset class="ui-grid-a">
                <div class="ui-block-a">
                    <textarea placeholder="Enter task" id="taskInputText" cols="50" maxlength="128"></textarea>
                </div>
                <div class="ui-block-b">
                    <input type="button" class="btn btn-success" value="Submit" id="taskBtn" />
                </div>
            </fieldset>
        </div>
    </div>
</body>
<script>
    // Add your javascript here
    $(function() {
        $("h1").animate({
            "margin-left": "100px"
        }, "slow");


        $('#taskBtn').click(function() {

            var newTask = $('#taskInputText').val();

            if (newTask !== '') {

                var count = $("#taskListSection").children().length;

                $('#taskListSection').append('<li class="list-group-item deletetask bg-success">' + count + '. ' + newTask + '</li>');

                $('#taskInputText').val('');

                deleteTasks();

                setTimeout(function() {
                    $('#taskListSection li.bg-success').removeClass('bg-success');
                }, 1000);

            } else {
                alert('Come on, you\'re better than that');
            }
        });
    });

    function deleteTasks() {
        $('.deletetask').click(function() {
            $(this).remove();
        });

    }
</script>

</html>