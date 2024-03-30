<?php
echo "Я загадав число від 0 до 10";

$button_text = "Відгадати";
echo Functions::view_template("labs/2/form2", compact('button_text'));
?>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const form = document.getElementById("numberForm");

        form.addEventListener("submit", function (event) {
            event.preventDefault();

            let formData = new FormData(form);

            fetch("/api/labs/2/10", {
                method: "POST",
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    alert(data.result);
                    if (data.hint) {
                        alert(data.hint);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });
    });
</script>