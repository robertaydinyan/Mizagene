</div>
</div>

</body>

<footer style="background: rgb(27,27,27);" class="mt-auto">
    <div class="container-fluid row text-center m-0" style="background: rgb(44,44,44); color: rgb(114, 114, 114)">
        <h6 style="padding: 15px 0">© 2023 Youmee LLC. All rights reserved.</h6>
    </div>
</footer>
<script>
    window.addEventListener('load', function () {
        $(document).ready(function () {
            $('#subjectsTable').DataTable({
                // dom: 'Qfrtip',
                "bLengthChange": false,
                language: {
                    paginate: {
                        previous: '<',
                        next: '>',
                    }
                }
            });

            // $('.dtsb-titleRow').remove();
            // $('.dtsb-searchBuilder').detach().appendTo('.filterBox');
            // let parent = $('.dataTables_filter').parent().parent();
            // $('.dataTables_filter').detach().appendTo($(parent));
        });
    })

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.4/b-2.3.6/sb-1.4.2/sp-2.1.2/datatables.min.js"></script>
</body>
</html>
