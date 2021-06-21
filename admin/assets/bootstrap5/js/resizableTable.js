$(function() {
    var pressed = false;
    var start = undefined;
    var startX, startWidth;
    
    $("table").mousedown(function(e) {
        start = $(this);
        pressed = true;
        startX = e.pageX;
        startWidth = $(this).width();
        $(start).addClass("resizing");
    });


    $(document).mousemove(function(e) {
        if(pressed) {
            $(start).css("user-select","none");
            $(start).css("cursor","col-resize");
            $(start).width(startWidth+(e.pageX-startX));
        }
    });
    
    $(document).mouseup(function(e) {
        if(pressed) {
            $(start).css("cursor","context-menu");
            $(start).removeClass("resizing");
            pressed = false;
        }
    });

    let td = document.querySelectorAll('td');
    let textareaStyle = "max-width: 800px; max-height: 120px; overflow-y: auto; display: block; padding: 2px 20px;"
    td.forEach(function(item){

        if(item.dataset.target == "textarea"){
            item.style = textareaStyle;
        }

        item.onclick = function(e){
            let input = document.createElement('textarea')
            input.value = e.target.innerText
            e.target.appendChild(input)
            input.select()
            document.execCommand("copy");
            e.target.style = "background:#2064c9; color:white;"
            if(e.target.dataset.target == "textarea"){
                e.target.style = textareaStyle+"background:#2064c9; color:white;";
            }
            
            setTimeout(()=>{
                e.target.style = window.getComputedStyle(e.target)
                if(e.target.dataset.target == "textarea"){
                    e.target.style = textareaStyle;
                }
            },300);
            input.remove()
        }
    });

});


