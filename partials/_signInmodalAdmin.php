<div class="modal fade" id="signInmodalA" tabindex="-1" role="dialog" aria-labelledby="singinModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="singinModalLabel">Admin LoginIn</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="partials/_adminLoginHandler.php" method="post">
                <div class="modal-body">
                    <div
                        class="lg:w-6/6 md:w-2/2 bg-gray-800 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
                        <h2 class="text-white text-lg font-medium title-font mb-5">ADMINISTRATOR ACCOUNT LOGIN IN</h2>
                        <input
                            class="bg-gray-900 rounded border text-white border-gray-900 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4"
                            placeholder="Admin ID" type="text" id="signInIDA" name="signInIDA">
                        <input
                            class="bg-gray-900 rounded border text-white border-gray-900 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4"
                            placeholder="Password" type="password" id="signInPasswordA" name="signInPasswordA">
                        <button
                            class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Submit</button>
                    </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
</div>
