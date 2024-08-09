<button class="cursor btn btn-danger" onclick="handleClick()">حذف تمام موارد</button>

<script>
    function myFunction() {
        alert("عملکرد شما اجرا شد.");
        // اینجا می‌توانید درخواست حذف را انجام دهید یا به آدرس خاصی بروید
        document.getElementById('delete-form').submit(); // فرم حذف را ارسال می‌کند
    }

    function handleClick() {
        let confirmation = confirm("آیا مطمئن هستید که می‌خواهید ادامه دهید؟");
        if (confirmation) {
            myFunction(); // اجرای عملکرد بعد از تایید کاربر
        }
    }
</script>

<form id="delete-form" action="{{ route('products.finalDelete') }}"  style="display: none;">

</form>
