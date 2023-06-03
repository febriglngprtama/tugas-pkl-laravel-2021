<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<!-- Bootstrap core JavaScript-->
<script src="/js/dashboard/vendor/jquery/jquery.min.js"></script>
<script src="/js/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
</script>

<!-- Core plugin JavaScript-->
<script src="/js/dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/js/dashboard/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="/js/dashboard/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="/js/dashbard/demo/chart-area-demo.js"></script>
<script src="/js/dashboard/demo/chart-pie-demo.js"></script>

<!-- Page level plugins -->
<script src="/js/dashboard/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="/js/dashboard/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="/js/dashboard/demo/datatables-demo.js"></script>

{{-- Trix --}}
<script>
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault()
    })

    function previewImage() {
        const image = document.querySelector('#image')
        const imgPreview = document.querySelector('.img-preview')

        const blob = URL.createObjectURL(image.files[0]);
        imgPreview.src = blob;
    }
</script>

{{-- Convert date Bootstrap --}}

<script type="text/javascript">
    $(".date").datepicker({
        format: "yyyy-mm-dd",
    });
</script>
