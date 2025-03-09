let quantity_in_info_parent = 4;
let quantity_of_projects = 3;
let quantity_of_examples = 6;
let quantity_of_feedbacks = 3;

/*
light - сейчас стоит светлая тема
dark - сейчас стоит тёмная тема
*/

document.getElementById("switch-theme").addEventListener("click",function(switch_id){  
    let button_switch = switch_id.target; // target - указатель на элемент, указывает на объект html по id
    //let theme = button_switch.classList[1];
    //console.log(theme);
    if (button_switch.classList[1] == "moon-icon")
    {
        button_switch.classList.toggle("moon-icon");
        button_switch.classList.toggle("sun-icon");

        document.body.className = "body-style dark";

        document.getElementById("inf-par").className = "info-parent dark";
        for (let inp = 1; inp <= quantity_in_info_parent; inp++){
            document.getElementById("h4-inf" + inp).className = "h4-info dark";
            document.getElementById("p-inf" + inp).className = "p-info dark";
        }

        document.getElementById("h4-pro").className = "h4-proj dark";
        for (let h3a = 1; h3a <= quantity_of_projects; h3a++){
            document.getElementById("h3-arena" + h3a).className = "h3-style dark";
        }

        document.getElementById("what_are_doing").className = "h2-style dark";
        for (let exn = 1; exn <= quantity_of_examples; exn++){
            document.getElementById("ex" + exn).className = "example dark";
            document.getElementById("build" + exn).className = "h4-style dark";
        }

        //document.getElementById("ex3").getElementsByTagName("img")[0].src="images/bridgedark.png";

        document.getElementById("ans-s").className = "h2-style dark";
        document.getElementById("gr_str").className = "gray-stripe dark";
        document.getElementById("feeds").className = "h2-style dark";

        for (let fs = 1; fs <= quantity_of_feedbacks; fs++){
            document.getElementById("are" + fs).className = "area-quo dark";
            document.getElementById("pers" + fs).className = "h4-style dark";
        }

        document.getElementById("cont").className = "h2-style dark";
        document.getElementById("foot").className = "footer-style dark";
    }  
    else
    {
        button_switch.classList.toggle("sun-icon");
        button_switch.classList.toggle("moon-icon");

        document.body.className = "body-style light";

        document.getElementById("inf-par").className = "info-parent light";
        for (let inp = 1; inp <= quantity_in_info_parent; inp++){
            document.getElementById("h4-inf" + inp).className = "h4-info light";
            document.getElementById("p-inf" + inp).className = "p-info light";
        }

        document.getElementById("h4-pro").className = "h4-proj light";
        for (let h3a = 1; h3a <= quantity_of_projects; h3a++){
            document.getElementById("h3-arena" + h3a).className = "h3-style light";
        }

        document.getElementById("what_are_doing").className = "h2-style light";
        for (let exn = 1; exn <= quantity_of_examples; exn++){
            document.getElementById("ex" + exn).className = "example light";
            document.getElementById("build" + exn).className = "h4-style light";
        }

        document.getElementById("ans-s").className = "h2-style light";
        document.getElementById("gr_str").className = "gray-stripe light";
        document.getElementById("feeds").className = "h2-style light";

        for (let fs = 1; fs <= quantity_of_feedbacks; fs++){
            document.getElementById("are" + fs).className = "area-quo light";
            document.getElementById("pers" + fs).className = "h4-style light";
        }

        document.getElementById("cont").className = "h2-style light";
        document.getElementById("foot").className = "footer-style light";
    }
},false);