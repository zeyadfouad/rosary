var number = document.getElementById("num");
var button = document.getElementById("count");
var delet = document.getElementById("delete");

// عند الضغط على زر "تسبيح"
button.addEventListener("click", function () {
    var currentValue = parseInt(number.innerHTML, 10) || 0;
    var total = currentValue + 1;

    number.innerHTML = total; // تحديث الرقم في الصفحة

    // إرسال الرقم إلى قاعدة البيانات
    fetch("save.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: "count=" + total
    })
    .then(response => response.text())
    .then(data => console.log("تم الحفظ: " + data))
    .catch(error => console.error("خطأ: " + error));
});

// عند الضغط على زر "إعادة التعيين"
delet.addEventListener("click", function () {
    number.innerHTML = 0; // تصفير العداد في الصفحة

    // تحديث الرقم في قاعدة البيانات
    
});
