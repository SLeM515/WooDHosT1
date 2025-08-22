// ملء تدريجي لشريط الموارد
document.addEventListener("DOMContentLoaded", function(){
    document.querySelectorAll('.progress-fill').forEach(bar => {
        let percent = bar.getAttribute('data-percent');
        bar.style.setProperty('--percent', percent + '%');
    });

    // تحريك البطاقات عند Hover (CSS handled already)
});
