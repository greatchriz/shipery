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
                                    <h4 class="card-title">Senders</h4>
                                    <p class="m-0 subtitle">List of Senders</p>
                                </div>

                               <a href="{{ route('sender.create') }}" class="btn  btn-info"><span
                                    class="btn-icon-start text-info"><i class="fa fa-plus color-info"></i>
                                </span>Add</a>
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

                                                <table class="table table-responsive-md">

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
