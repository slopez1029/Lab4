function checkout() 
            {
                var a = parseInt(document.getElementById("question-1-answers-A").value);
                var b = parseInt(document.getElementById("question-2-answers-A").value);
                var c = parseInt(document.getElementById("question-3-answers-A").value);
                var d = parseInt(document.getElementById("question-4-answers-A").value);
                var e = parseInt(document.getElementById("question-5-answers-A").value);
                var f = document.getElementById("question-6-answers-A").checked;
                var g = document.getElementById("question-6-answers-B").checked;
                var h = document.getElementById("question-6-answers-C").checked;
                
                var x = document.getElementById('user');
                var atpos=x.value.indexOf("@");
                var dotpos=x.value.lastIndexOf(".");
                if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
                {
                    alert("Not a valid e-mail address");
                    return false;
                } 
                
                
               else if(isNaN(a) || document.getElementById("question-1-answers-A").value == "" || a < 0)
                {
                   // if(a == undefined)
                   // {
                    alert("Please enter a valid quantity for item 1");
                    return false;
                    //}
                    //window.location.href = "fro.html";
                }
               else if(isNaN(b) || document.getElementById("question-2-answers-A").value == "" || b < 0)
                {
                    alert("Please enter a valid quantity for item 2");
                    return false;
                    //window.location.href = "fro.html";
                }
              else if(isNaN(c) || document.getElementById("question-3-answers-A").value == "" || c < 0)
                {
                    alert("Please enter a valid quantity for item 3");
                    return false;
                    //window.location.href = "fro.html";
                }
              else if(isNaN(d) || document.getElementById("question-4-answers-A").value == "" || d < 0)
                {
                    alert("Please enter a valid quantity for item 4");
                    return false;
                    //window.location.href = "fro.html";
                }
              else if(isNaN(e) || document.getElementById("question-5-answers-A").value == "" || e < 0)
                {
                    alert("Please enter a valid quantity for item 5");
                    return false;
                    //window.location.href = "fro.html";
                }
                else if( f == false && g == false && h == false)
                {
                    alert("Please select a shipping option");
                    return false;
                }
                
                return true;
            }
