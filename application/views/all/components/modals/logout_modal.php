<!-- Log out modal -->
<div class="modal fade" id="logoutModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" style="display: none;" aria-modal="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Loggging Out... 😢</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to log out?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No 😭</button>
                <button type="button" class="btn btn-danger" id="logoutBtn">Yes 💅</button>
            </div>
        </div>
    </div>
</div>

<script>
// When logout button is clicked
$('#logoutBtn').click(function(e) {
    var logoutBtn = $("#logoutBtn");

    // Make button disabled and add spinner
    logoutBtn.attr("disabled", true);
    logoutBtn.html(
        `<span class="spinner-border text-dark m-1" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </span>`);

    // Make a request to logout using ajax
    e.preventDefault();
    requestLogout();
});
</script>