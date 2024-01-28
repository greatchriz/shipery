<x-app-layout>
    <div class="container-fluid">

        <!-- row -->
        <div class="element-area">
            <div class="demo-view">
                <div class="container-fluid pt-0 ps-0 pe-lg-4 pe-0">

                    <div class="col-xl-12">
                        <div
                            class="card dz-card"
                            id="accordion-three"
                        >
                            <div class="card-header flex-wrap d-flex justify-content-between">
                                <div>
                                    <h4 class="card-title">Profile Datatable</h4>
                                    <p class="m-0 subtitle">Add <code>profile</code> class with
                                        <code>datatables</code></p>
                                </div>
                                <ul
                                    class="nav nav-tabs dzm-tabs"
                                    id="myTab-2"
                                    role="tablist"
                                >
                                    <li
                                        class="nav-item"
                                        role="presentation"
                                    >
                                        <button
                                            class="nav-link active "
                                            id="home-tab-2"
                                            data-bs-toggle="tab"
                                            data-bs-target="#withoutSpace"
                                            type="button"
                                            role="tab"
                                            aria-selected="true"
                                        >Preview</button>
                                    </li>
                                    <li
                                        class="nav-item"
                                        role="presentation"
                                    >
                                        <button
                                            class="nav-link "
                                            id="profile-tab-2"
                                            data-bs-toggle="tab"
                                            data-bs-target="#withoutSpace-html"
                                            type="button"
                                            role="tab"
                                            aria-selected="false"
                                        >HTML</button>
                                    </li>
                                </ul>
                            </div>

                            <!-- /tab-content -->
                            <div
                                class="tab-content"
                                id="myTabContent-2"
                            >
                                <div
                                    class="tab-pane fade show active"
                                    id="withoutSpace"
                                    role="tabpanel"
                                    aria-labelledby="home-tab-2"
                                >
                                    <div class="card-body pt-0">
                                        <div class="table-responsive">
                                            <table
                                                id="example3"
                                                class="display table"
                                                style="min-width: 845px"
                                            >
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Address</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($senders as $sender)
                                                        <tr>
                                                            <td>{{ $sender->name }}</td>
                                                            <td>{{ $sender->address }}</td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <a
                                                                        href="#"
                                                                        class="btn btn-primary shadow btn-xs sharp me-1"
                                                                    ><i class="fas fa-pencil-alt"></i></a>
                                                                    <a
                                                                        href="#"
                                                                        class="btn btn-danger shadow btn-xs sharp"
                                                                    ><i class="fa fa-trash"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /tab-content -->

                        </div>
                    </div>
                    <!-- Column ends -->

                </div>
            </div>
            <div class="demo-right ">
                <div
                    class="demo-right-inner"
                    id="right-sidebar"
                >
                    <h4 class="title">Datatabls</h4>
                    <div
                        class="dz-scroll demo-right-tabs"
                        id="rightSidebarScroll"
                    >
                        <ul
                            class="navbar-nav nav"
                            id="menu-bar"
                        >
                            <li><a
                                    href="#accordion-one"
                                    class="scroll "
                                >Basic Datatable</a></li>
                            <li><a
                                    href="#accordion-two"
                                    class="scroll "
                                >Datatable</a></li>
                            <li><a
                                    href="#accordion-three"
                                    class="scroll "
                                >Profile
                                    Datatable</a></li>
                            <li><a
                                    href="#accordion-four"
                                    class="scroll "
                                >Fees Collection</a></li>
                            <li><a
                                    href="#accordion-five"
                                    class="scroll "
                                >Patient</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
