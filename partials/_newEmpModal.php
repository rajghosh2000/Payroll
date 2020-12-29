<!-- Modal -->
<div class="modal fade" id="addEmp" tabindex="-1" role="dialog" aria-labelledby="singupModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="singupModalLabel">New Employee</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/partials/_addEmpl.php" method="post">
                <div class="modal-body">
                    <div
                        class="lg:w-6/6 md:w-2/2 bg-gray-800 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
                        <h2 class="text-white text-lg font-medium title-font mb-5">New User Credentials</h2>
                        <input
                            class="bg-white rounded border text-dark border-gray-900 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4"
                            placeholder="Employee ID" type="text" id="e_id" name="e_id">
                        <input
                            class="bg-white rounded border text-dark border-gray-900 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4"
                            placeholder="Name" type="text" id="e_name" name="e_name">
                        <label for="dob" class="text-white">Date of Birth of Employee</label>
                        <input
                            class="bg-white rounded border text-dark border-gray-900 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4"
                            placeholder="Date of Birth" type="date" id="dob" name="dob">
                        <select class="bg-white rounded border text-dark border-gray-900 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4" placeholder="Employee Position" name="e_pos" id="e_pos">
                                <option value="select">---Select Employee Position---</option>
                                <option value="Assistant Director">Assistant Director</option>
                                <option value="Senior Supervisor">Senior Supervisor</option>
                                <option value="Junior Supervisor">Junior Supervisor</option>
                                <option value="General Officer">General Officer</option>
                                <option value="Clerk">Clerk</option>
                        </select>
                        <button type="submit"
                            class="text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Add Employee</button>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>