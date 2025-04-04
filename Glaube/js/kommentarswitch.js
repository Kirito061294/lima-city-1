<script>
    function toggleBlock2(basisID, anzahlElemente) {
        for (var i = 1; i <= anzahlElemente; i++) {
            var kommentarID = basisID + i;
            var element = document.getElementById(kommentarID);

            if (element) {
                if (element.style.display === "none" || element.style.display === "") {
                    element.style.display = "block";
                } else {
                    element.style.display = "none";
                }
            }
        }
    }
</script>