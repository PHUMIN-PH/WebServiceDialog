<div class="form-row">

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                aria-selected="false">Member Status</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link active" id="search-tab" data-toggle="tab" href="#search" role="tab"
                aria-controls="profile" aria-selected="true" aria-expanded="true">Search</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                aria-selected="true">Search Register Date </a>
        </li>
    </ul>
    <div class="tab-content col-12" id="myTabContent">
        <div class="tab-pane fade " id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="form-row pt-2" id="formRowI">
                <div class="input-group col-lg-6 col-6 mb-3">
                    <span class="input-group-text bg-light text-light font-weight-bold form-control" id="">Register Date
                    </span>
                    <div class="col-8">
                        <input type="datetime-local" step="1" class="form-control" id="start_date"
                            placeholder="start date" value="2024-02-12 00:00:00">
                    </div>
                </div>

                <div class="col-lg-5 col-5 mb-3">
                    <input type="datetime-local" step="1" class="form-control" id="end_date" placeholder="end date"
                        value="2024-02-12 23:59:59">
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="form-row pt-2" id="formRowII">
                <div class="col-lg-4 col-4 mb-3">
                    <select class="form-control" id="memberType">
                        <option value="All">All member </option>
                        <option value="New">New member</option>
                        <option value="Cancel">Cancel member</option>
                    </select>
                </div>
                <div class="col-lg-4 col-4 mb-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-light text-light font-weight-bold" id="">Card ID</span>
                        </div>
                        <input type="text" class="form-control  " id="cardid" placeholder=""
                            aria-describedby="inputGroupPrepend3">
                    </div>
                </div>
                <div class="col-lg-4 col-4 mb-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-light text-light font-weight-bold" id="">Plate
                                Number</span>
                        </div>
                        <input type="text" class="form-control  " id="platenum" placeholder=""
                            aria-describedby="inputGroupPrepend3">
                    </div>
                </div>

            </div>
        </div>

        <div class="tab-pane fade active show in" id="search" role="tabpanel" aria-labelledby="search-tab">
            <div class="form-row pt-2" id="formRowIII">


                <div class="col-lg-4 col-4 mb-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-light text-light font-weight-bold" id="">Name</span>
                        </div>
                        <input type="text" class="form-control  " id="username" placeholder=""
                            aria-describedby="inputGroupPrepend3">
                    </div>
                </div>
                <div class="col-lg-4 col-4 mb-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-light text-light font-weight-bold" id="">Remark</span>
                        </div>
                        <input type="text" class="form-control  " id="remark" placeholder=""
                            aria-describedby="inputGroupPrepend3">
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>