$('document').ready(function() {
    let code; 
    let cat;
    $(".edit").click(function() {
        
        const $row = $(this).closest("tr"),        // Finds the closest row <tr> 
        $cfa= $row.find("td:nth-child(1)"), // Finds the 2nd <td> element
        $date= $row.find("td:nth-child(2)"),
        $tracker =$row.find("td:nth-child(3)"),
        $code= $row.find("td:nth-child(4)"),
        $cat= $row.find("td:nth-child(5)"),
        $start= $row.find("td:nth-child(6)"),
        $end= $row.find("td:nth-child(7)"),
        $record= $row.find("td:nth-child(8)");

        code =$code.text();
        cat = $cat.text();

        $('.errorCodeInput').val($code.text());
        $('.errorCatInput').val($cat.text());
        $('.open-modal').click();
        // $.each($tds, function() {                // Visits every single <td> element
    //     console.log($(this).text());         // Prints out the text within the <td>

    //      });
        
    });

    $(".submitModal").click(function() {
        
       const $oldCode= code,
        $oldCat= cat,
        $newCode =  $('.errorCodeInput').val(),
        $newCat = $('.errorCatInput').val();

        alert($oldCat + " " + $oldCode);
        var form = $("<form/>", 
                 { action:'/sendEmail.php',method: 'post'}
            );
        form.append( 
            $("<input>", 
                { type:'text', 
                 
                name:'oldCode', 
                value:$oldCode
                 }
            )
        );
        form.append( 
            $("<input>", 
                { type:'text', 
                 
                name:'newCode', 
                value:$newCode
                 }
            )
        );
        form.append( 
            $("<input>", 
                { type:'text', 
                 
                name:'oldCat', 
                value:$oldCat
                 }
            )
        );
        form.append( 
            $("<input>", 
                { type:'text', 
                 
                name:'newCat', 
                value:$newCat
                 }
            )
        );

        form.append( 
            $("<input>", 
                { type:'submit', 
                    value:'Search', 
                    style:'width:30%' }
            )
        );
        $('body').append( form );
             form.submit();   
            });
});