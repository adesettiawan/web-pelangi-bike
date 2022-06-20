<script src="{{ asset('backend-assets/vendors/js/vendor.bundle.base.js') }}"></script>
<script src="{{ asset('backend-assets/vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('backend-assets/vendors/jquery-circle-progress/js/circle-progress.min.js') }}"></script>
<script src="{{ asset('backend-assets/js/off-canvas.js') }}"></script>
<script src="{{ asset('backend-assets/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('backend-assets/js/misc.js') }}"></script>
<script src="{{ asset('backend-assets/js/dashboard.js') }}"></script>
<script type="text/javascript" charset="utf8" src="https:/cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js">
</script>
<script>
    $(document).ready(function() {
        var table = $('#dataTable').DataTable({
            search: {
                return: true,
            },
            lengthMenu: [
                [10, 25, 50, -1],
                [10, 25, 50, 'All'],
            ],
        });
        $('#dataTable tbody').on('click', 'tr', function() {
            var data = table.row(this).data();
            alert('You clicked on ' + data[0] + "'s row");
        });

    });
</script>
<script>
    function display_ct() {
        var x = new Date()
        var ampm = x.getHours() >= 12 ? ' PM' : ' AM';

        var x1 = x.getMonth() + 1 + "/" + x.getDate() + "/" + x.getFullYear();
        x1 = x1 + " - " + x.getHours() + ":" + x.getMinutes() + ":" + x.getSeconds() + ampm;
        document.getElementById('ct').innerHTML = x1;
        display_c5();
    }

    function display_c5() {
        var refresh = 1000; // Refresh rate in milli seconds
        mytime = setTimeout('display_ct()', refresh)
    }
    display_c5()
</script>
<script>
    $function rndmstr() {
        let length = document.getElementById("strlength").value;
        const characters = 'abcdefghijklmnopqrstuvwxyz';
        let result = ' ';
        const charactersLength = characters.length;
        for (let i = 0; i < length; i++) {
            result +=
                characters.charAt(Math.floor(Math.random() * charactersLength));
        }
        document.getElementById("code").innerHTML = result
    }
</script>
