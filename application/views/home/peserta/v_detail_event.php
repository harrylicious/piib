						
						
			
							<!-- Page Content -->
							<div class="pt-5">
								<div class="container">
									<div class="row align-items-center">
										<div class="col-xl-12 col-lg-12 col-md-12 col-12">
											<!-- Bg -->
											<div class=" pt-16 rounded-top " style="
											background: url(<?= base_url();?>assets/images/background/profile-bg.jpg) no-repeat;
											background-size: cover;">
										</div>
										<div
										class="d-flex align-items-end justify-content-between bg-white px-4  pt-2 pb-4 rounded-bottom shadow-sm ">
										<div class="d-flex align-items-center">
											<div class="mr-2 position-relative d-flex justify-content-end align-items-end mt-n5">
												<img src="<?= base_url('assets/images/users/'.$data['foto']); ?>" class="avatar-xl rounded-circle border-width-4 border-white"
												alt="">
											</div>
											<div class="lh-1">
												<h2 class="mb-0">
												<?= $data['nama_lengkap']; ?>
												</h2>

												<p class="mb-0 d-block">@<?= $data['username']; ?></p>
										</div>
									</div>
									<div>
										<a href="<?= base_url();?>peserta/profile" class="btn btn-primary btn-sm d-none d-md-block">Profil saya</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Content -->
			
					<!-- Tab content -->
                    <!-- Page header -->
               
                    <!-- Page content -->
                    <div class="mt-10">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-12 col-12 mt-n8 mb-4 mb-lg-0">
                                    <!-- Card -->
                                    <div class="card rounded-lg">
                                        <!-- Card header -->
                                        <div class="card-header border-bottom-0 p-0">
                                            <div>
                                                <!-- Nav -->
                                                <ul class="nav nav-lb-tab" id="tab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="table-tab" data-toggle="pill" href="#table" role="tab" aria-controls="table" aria-selected="true">Deskripsi</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="description-tab" data-toggle="pill" href="#description" role="tab" aria-controls="description" aria-selected="false">Peserta</a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Card Body -->
                                        <div class="card-body">
                                            <div class="tab-content" id="tabContent">
                                                <div class="tab-pane fade show active" id="table" role="tabpanel" aria-labelledby="table-tab">
                                                    <!-- Card -->
                                                    <div class="accordion" id="courseAccordion">
                                                        <div>
                                                            <!-- List group -->
                                                            <ul class="list-group list-group-flush">
                                                                <li class="list-group-item px-0 pt-0">
                                                                    <!-- Toggle -->
                                                                    <a class=" h4 mb-0 d-flex align-items-center text-inherit text-decoration-none active" data-toggle="collapse" href="#courseTwo" aria-expanded="true" aria-controls="courseTwo">
                                                                        <div class="mr-auto">
                                                                            <?= $data_detail_event['nama_event']; ?>
                                                                        </div>
                                                                        <!-- Chevron -->
                                                                        <span class="chevron-arrow ml-4">
                                            <i class="fe fe-chevron-down font-size-md"></i>
                                            </span>
                                                                    </a>
                                                                    <!-- Row -->
                                                                    <!-- Collapse -->
                                                                    <div class="collapse show" id="courseTwo" data-parent="#courseAccordion">
                                                                        <div class="pt-3 pb-2">
                                                                            <a href="course-resume.html" class="mb-2 d-flex justify-content-between align-items-center text-inherit text-decoration-none">
                                                                                <div class="text-truncate">
                                                                                    <span class="icon-shape bg-light text-primary icon-sm rounded-circle mr-2"><i
                                                                                        class="mdi mdi-play font-size-md"></i></span>
                                                                                                                        <span>Introduction</span>
                                                                                                                    </div>
                                                                                                                    <div class="text-truncate">
                                                                                                                        <span>1m 7s</span>
                                                                                                                    </div>
                                                                                                                </a>
                                                                                                                <p>
                                                                                                    
                                                                            <?= $data_detail_event['deskripsi']; ?>
                                                                                                </p>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                                <!-- List group item -->
                                                                <li class="list-group-item px-0 pb-0">
                                                                    <!-- Toggle -->
                                                                    <a class="h4 mb-0 d-flex align-items-center text-inherit text-decoration-none" data-toggle="collapse" href="#courseEleven" aria-expanded="false" aria-controls="courseEleven">
                                                                        <div class="mr-auto">
                                                                            <!-- Title -->
                                                                            Summary
                                                                        </div>
                                                                        <!-- Chevron -->
                                                                        <span class="chevron-arrow ml-4">
                                            <i class="fe fe-chevron-down font-size-md"></i>
                                            </span>
                                                                    </a>
                                                                    <!-- Row -->
                                                                    <!-- Collapse -->
                                                                    <div class="collapse" id="courseEleven" data-parent="#courseAccordion">
                                                                        <div class="pt-3 pb-2">
                                                                            <p>
                                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae esse velit eos sunt ab inventore est tenetur blanditiis? Voluptas eius molestiae ad itaque tempora nobis minima eveniet aperiam molestias, maiores natus expedita dolores ea non possimus
                                                                                magnam corrupt i quas rem unde quo enim porro culpa! Quaerat veritatis veniam corrupti iusto.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description-tab">
                                                    <!-- Description -->
                                                    <div class="mb-4">
                                                        <h3 class="mb-2">Daftar Peserta</h3>
                                                        <p>
                                                            Informasi peserta yang sudah mendaftar dalam event ini.
                                                        </p>
                                                    </div>
                                                    <div class="table-responsive ">
															<table class="table mb-0">
																<!-- Table head -->
																<thead class="thead-light">
																	<tr>
																		<th scope="col" class="border-bottom-0">TANGGAL DAFTAR</th>
																		<th scope="col" class="border-bottom-0">NAMA PESERTA</th>
																		<th scope="col" class="border-bottom-0">GRUB</th>
																	</tr>
																</thead>
																<!-- Table body -->
																<tbody>

																	<?php foreach ($data_anggota_tim as $row) 
																		{
																	?>
																	<tr>

																		<td class="align-middle"><?= tgl_dan_hari(tgl_default($row->created_at)).", ".tgl_default($row->created_at).", "; ?></td>
																		<td class="align-middle">
																			<a href="#!">

																				<h5 class="align-items-center text-primary-hover">
																					<?= $row->nama_lengkap; ?>
																				</h5>

																			</a>
																		</td>
																		<td> <?= $row->nama_grub; ?></td>
						
																	</tr>

																	<?php } ?>
																	
																</tbody>
															</table>
														</div>
                                                     </div>
                                                <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                                    <!-- Reviews -->
                                                    <div class="mb-3">
                                                        <h3 class="mb-4">How students rated this courses</h3>
                                                        <div class="row align-items-center">
                                                            <div class="col-auto text-center">
                                                                <h3 class="display-2 font-weight-bold">4.5</h3>
                                                                <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                                <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                                <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                                <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                                <i class="mdi mdi-star mr-n1-half text-warning"></i>
                                                                <p class="mb-0 font-size-xs">(Based on 27 reviews)</p>
                                                            </div>
                                                            <!-- Progress bar -->
                                                            <div class="col pt-3 order-3 order-md-2">
                                                                <div class="progress mb-3" style="height: 6px;">
                                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <div class="progress mb-3" style="height: 6px;">
                                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <div class="progress mb-3" style="height: 6px;">
                                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <div class="progress mb-3" style="height: 6px;">
                                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <div class="progress mb-0" style="height: 6px;">
                                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-auto col-6 order-2 order-md-3">
                                                                <!-- Rating -->
                                                                <div>
                                                                    <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                                    <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                                    <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                                    <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                                    <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                                    <span class="ml-1">53%</span>
                                                                </div>
                                                                <div>
                                                                    <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                                    <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                                    <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                                    <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                                    <i class="mdi mdi-star mr-n1 text-light"></i>
                                                                    <span class="ml-1">36%</span>
                                                                </div>
                                                                <div>
                                                                    <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                                    <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                                    <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                                    <i class="mdi mdi-star mr-n1 text-light"></i>
                                                                    <i class="mdi mdi-star mr-n1 text-light"></i>
                                                                    <span class="ml-1">9%</span>
                                                                </div>
                                                                <div>
                                                                    <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                                    <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                                    <i class="mdi mdi-star mr-n1 text-light"></i>
                                                                    <i class="mdi mdi-star mr-n1 text-light"></i>
                                                                    <i class="mdi mdi-star mr-n1 text-light"></i>
                                                                    <span class="ml-1">3%</span>
                                                                </div>
                                                                <div>
                                                                    <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                                    <i class="mdi mdi-star mr-n1 text-light"></i>
                                                                    <i class="mdi mdi-star mr-n1 text-light"></i>
                                                                    <i class="mdi mdi-star mr-n1 text-light"></i>
                                                                    <i class="mdi mdi-star mr-n1 text-light"></i>
                                                                    <span class="ml-1">2%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- hr -->
                                                    <hr class="my-5" />
                                                    <div class="mb-3">
                                                        <div class="d-lg-flex align-items-center justify-content-between mb-5">
                                                            <!-- Reviews -->
                                                            <div class="mb-3 mb-lg-0">
                                                                <h3 class="mb-0">Reviews</h3>
                                                            </div>
                                                            <div>
                                                                <!-- Form -->
                                                                <form class="form-inline">
                                                                    <div class="d-flex align-items-center mr-2">
                                                                        <span class="position-absolute pl-3">
                                            <i class="fe fe-search"></i>
                                            </span>
                                                                        <input type="search" class="form-control pl-6" placeholder="Search Review" />
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <!-- Rating -->
                                                        <div class="media border-bottom pb-4 mb-4">
                                                            <img src="../assets/images/avatar/avatar-2.jpg" alt="" class="rounded-circle avatar-lg" />
                                                            <div class="media-body ml-3">
                                                                <h4 class="mb-1">
                                                                    Max Hawkins
                                                                    <span class="ml-1 font-size-xs text-muted">2 Days ago</span>
                                                                </h4>
                                                                <div class="font-size-xs mb-2">
                                                                    <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                                    <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                                    <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                                    <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                                    <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                                </div>
                                                                <p>Lectures were at a really good pace and I never felt lost. The instructor was well informed and allowed me to learn and navigate Figma easily.</p>
                                                                <div class="d-lg-flex">
                                                                    <p class="mb-0">Was this review helpful?</p>
                                                                    <a href="#!" class="btn btn-xs btn-primary ml-lg-3">Yes</a>
                                                                    <a href="#!" class="btn btn-xs btn-outline-white ml-1">No</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Rating -->
                                                        <div class="media border-bottom pb-4 mb-4">
                                                            <img src="../assets/images/avatar/avatar-3.jpg" alt="" class="rounded-circle avatar-lg" />
                                                            <div class="media-body ml-3">
                                                                <h4 class="mb-1">Arthur Williamson <span class="ml-1 font-size-xs text-muted">3 Days ago</span>
                                                                </h4>
                                                                <div class="font-size-xs mb-2">
                                                                    <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                                    <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                                    <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                                    <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                                    <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                                </div>
                                                                <p>Its pretty good.Just a reminder that there are also students with Windows, meaning Figma its a bit different of yours. Thank you!</p>
                                                                <div class="d-lg-flex">
                                                                    <p class="mb-0">Was this review helpful?</p>
                                                                    <a href="#!" class="btn btn-xs btn-primary ml-lg-3">Yes</a>
                                                                    <a href="#!" class="btn btn-xs btn-outline-white ml-1">No</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Rating -->
                                                        <div class="media border-bottom pb-4 mb-4">
                                                            <img src="../assets/images/avatar/avatar-4.jpg" alt="" class="rounded-circle avatar-lg" />
                                                            <div class="media-body ml-3">
                                                                <h4 class="mb-1">Claire Jones <span class="ml-1 font-size-xs text-muted">4 Days ago</span></h4>
                                                                <div class="font-size-xs mb-2">
                                                                    <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                                    <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                                    <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                                    <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                                    <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                                </div>
                                                                <p>
                                                                    Great course for learning Figma, the only bad detail would be that some icons are not included in the assets. But 90% of the icons needed are included, and the voice of the instructor was very clear and easy to understood.
                                                                </p>
                                                                <div class="d-lg-flex">
                                                                    <p class="mb-0">Was this review helpful?</p>
                                                                    <a href="#!" class="btn btn-xs btn-primary ml-lg-3">Yes</a>
                                                                    <a href="#!" class="btn btn-xs btn-outline-white ml-1">No</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Rating -->
                                                        <div class="media">
                                                            <img src="../assets/images/avatar/avatar-5.jpg" alt="" class="rounded-circle avatar-lg" />
                                                            <div class="media-body ml-3">
                                                                <h4 class="mb-1">
                                                                    Bessie Pena
                                                                    <span class="ml-1 font-size-xs text-muted">5 Days ago</span>
                                                                </h4>
                                                                <div class="font-size-xs mb-2">
                                                                    <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                                    <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                                    <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                                    <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                                    <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                                </div>
                                                                <p>
                                                                    I have really enjoyed this class and learned a lot, found it very inspiring and helpful, thank you!
                                                                    <i class="em em-heart_eyes ml-2 font-size-xs"></i>
                                                                </p>
                                                                <div class="d-lg-flex">
                                                                    <p class="mb-0">Was this review helpful?</p>
                                                                    <a href="#!" class="btn btn-xs btn-primary ml-lg-3">Yes</a>
                                                                    <a href="#!" class="btn btn-xs btn-outline-white ml-1">No</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="transcript" role="tabpanel" aria-labelledby="transcript-tab">
                                                    <!-- Description -->
                                                    <div>
                                                        <h3 class="mb-3">Transcript from the "Introduction" Lesson</h3>
                                                        <div class="mb-4">
                                                            <h4>Course Overview <a href="#!" class="text-primary ml-2 h4">[00:00:00]</a></h4>
                                                            <p class="mb-0">
                                                                My name is John Deo and I work as human duct tape at Gatsby, that means that I do a lot of different things. Everything from dev roll to writing content to writing code. And I used to work as an architect at IBM. I live in Portland, Oregon.
                                                            </p>
                                                        </div>
                                                        <div class="mb-4">
                                                            <h4>Introduction <a href="#!" class="text-primary ml-2 h4">[00:00:16]</a></h4>
                                                            <p>
                                                                We'll dive into GraphQL, the fundamentals of GraphQL. We're only gonna use the pieces of it that we need to build in Gatsby. We're not gonna be doing a deep dive into what GraphQL is or the language specifics. We're also gonna get into MDX. MDX is a way
                                                                to write React components in your markdown.
                                                            </p>
                                                        </div>
                                                        <div class="mb-4">
                                                            <h4>Why Take This Course? <a href="#!" class="text-primary ml-2 h4">[00:00:37]</a></h4>
                                                            <p>
                                                                We'll dive into GraphQL, the fundamentals of GraphQL. We're only gonna use the pieces of it that we need to build in Gatsby. We're not gonna be doing a deep dive into what GraphQL is or the language specifics. We're also gonna get into MDX. MDX is a way
                                                                to write React components in your markdown.
                                                            </p>
                                                        </div>
                                                        <div class="mb-4">
                                                            <h4>A Look at the Demo Application <a href="#!" class="text-primary ml-2 h4">[00:00:54]</a></h4>
                                                            <p>
                                                                We'll dive into GraphQL, the fundamentals of GraphQL. We're only gonna use the pieces of it that we need to build in Gatsby. We're not gonna be doing a deep dive into what GraphQL is or the language specifics. We're also gonna get into MDX. MDX is a way
                                                                to write React components in your markdown.
                                                            </p>
                                                            <p>
                                                                We'll dive into GraphQL, the fundamentals of GraphQL. We're only gonna use the pieces of it that we need to build in Gatsby. We're not gonna be doing a deep dive into what GraphQL is or the language specifics. We're also gonna get into MDX. MDX is a way
                                                                to write React components in your markdown.
                                                            </p>
                                                        </div>
                                                        <div class="mb-4">
                                                            <h4>Summary <a href="#!" class="text-primary ml-2 h4">[00:01:31]</a></h4>
                                                            <p>
                                                                We'll dive into GraphQL, the fundamentals of GraphQL. We're only gonna use the pieces of it that we need to build in Gatsby. We're not gonna be doing a deep dive into what GraphQL is or the language specifics. We're also gonna get into MDX. MDX is a way
                                                                to write React components in your markdown.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 col-12 mt-lg-n11">
                                    <!-- Card -->
                                    <div class="card mb-3 mb-4">
                                    
                                    </div>
                                    <!-- Card -->
                                    <div class="card mb-4">
                                        <div>
                                            <!-- Card header -->
                                            <div class="card-header">
                                                <h4 class="mb-0">What’s included</h4>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item bg-transparent"><i class="fe fe-play-circle align-middle mr-2 text-primary"></i>Estimasi 2 Jam</li>
                                                <li class="list-group-item bg-transparent"><i class="fe fe-award mr-2 align-middle text-success"></i>Sertifikat</li>
                                                </li>
                                                <li class="list-group-item bg-transparent"><i class="fe fe-video align-middle mr-2 text-danger"></i>Watch Online</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Card -->
                                    <div class="card">
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="position-relative">
                                                    <img src="<?= base_url('assets/images/avatar/avatar-1.jpg'); ?>" alt="" class="rounded-circle avatar-xl" />
                                                    <a href="#!" class="position-absolute mt-2 ml-n3" data-toggle="tooltip" data-placement="top" title="Verifed">
                                                        <img src="<?= base_url('assets/images/svg/checked-mark.svg'); ?>" alt="" height="30" width="30" />
                                                    </a>
                                                </div>
                                                <div class="ml-4">
                                                    <h4 class="mb-0">Dr. Muhammad Ali, M.Si</h4>
                                                    <p class="mb-1 font-size-xs">Universitas Hamzanwadi</p>
                                                    <span class="font-size-xs"><span class="text-warning">4.5</span><span class="mdi mdi-star text-warning mr-2"></span>Instructor Rating</span>
                                                </div>
                                            </div>
                                            <div class="border-top row mt-3 border-bottom mb-3 no-gutters">
                                                <div class="col">
                                                    <div class="pr-1 pl-2 py-3">
                                                        <h5 class="mb-0">110</h5>
                                                        <span>Students</span>
                                                    </div>
                                                </div>
                                                <div class="col border-left">
                                                    <div class="pr-1 pl-3 py-3">
                                                        <h5 class="mb-0">32</h5>
                                                        <span>Courses</span>
                                                    </div>
                                                </div>
                                                <div class="col border-left">
                                                    <div class="pr-1 pl-3 py-3">
                                                        <h5 class="mb-0">12,230</h5>
                                                        <span>Reviews</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>I am an Innovation designer focussing on UX/UI based in Berlin. As a creative resident at Figma explored the city of the future and how new technologies.</p>
                                            <a href="instructor-profile.html" class="btn btn-outline-white btn-sm">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card -->
                            <div class="pt-12 pb-3">
                                <div class="row d-md-flex align-items-center mb-4">
                                    <div class="col-12">
                                        <h2 class="mb-0">Related Courses</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <!-- Card -->
                                        <div class="card mb-4 card-hover">
                                            <a href="course-single.html" class="card-img-top"><img src="../assets/images/course/course-react.jpg" alt="" class="card-img-top rounded-top" /></a>
                                            <!-- Card body -->
                                            <div class="card-body">
                                                <h4 class="mb-2 text-truncate-line-2"><a href="course-single.html" class="text-inherit">How to
                                    easily create a website with React</a></h4>
                                                <ul class="mb-3 list-inline">
                                                    <li class="list-inline-item"><i class="far fa-clock mr-1"></i>3h 56m</li>
                                                    <li class="list-inline-item">
                                                        <svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                                    <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
                                    <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                                    </svg> Beginner
                                                    </li>
                                                </ul>
                                                <div class="lh-1">
                                                    <span>
                                    <i class="mdi mdi-star text-warning mr-n1"></i>
                                    <i class="mdi mdi-star text-warning mr-n1"></i>
                                    <i class="mdi mdi-star text-warning mr-n1"></i>
                                    <i class="mdi mdi-star text-warning mr-n1"></i>
                                    <i class="mdi mdi-star text-warning"></i>
                                </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="font-size-xs text-muted">(7,700)</span>
                                                </div>
                                            </div>
                                            <!-- Card footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center no-gutters">
                                                    <div class="col-auto">
                                                        <img src="../assets/images/avatar/avatar-1.jpg" class="rounded-circle avatar-xs" alt="" />
                                                    </div>
                                                    <div class="col ml-2">
                                                        <span>Morris Mccoy</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#!" class="text-muted bookmark">
                                                            <i class="fe fe-bookmark  "></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <!-- Card -->
                                        <div class="card mb-4 card-hover">
                                            <a href="course-single.html" class="card-img-top"><img src="../assets/images/course/course-graphql.jpg" alt="" class="card-img-top rounded-top" /></a>
                                            <!-- Card body -->
                                            <div class="card-body">
                                                <h4 class="mb-2 text-truncate-line-2"><a href="course-single.html" class="text-inherit">GraphQL:
                                    introduction to graphQL for beginners</a></h4>
                                                <ul class="mb-3 list-inline">
                                                    <li class="list-inline-item"><i class="far fa-clock mr-1"></i>2h 46m</li>
                                                    <li class="list-inline-item">
                                                        <svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                                    <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                                    <rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE" />
                                    </svg> Advance
                                                    </li>
                                                </ul>
                                                <div class="lh-1">
                                                    <span>
                                    <i class="mdi mdi-star text-warning mr-n1"></i>
                                    <i class="mdi mdi-star text-warning mr-n1"></i>
                                    <i class="mdi mdi-star text-warning mr-n1"></i>
                                    <i class="mdi mdi-star text-warning mr-n1"></i>
                                    <i class="mdi mdi-star text-warning"></i>
                                </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="font-size-xs text-muted">(9,300)</span>
                                                </div>
                                            </div>
                                            <!-- Card footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center no-gutters">
                                                    <div class="col-auto">
                                                        <img src="../assets/images/avatar/avatar-2.jpg" class="rounded-circle avatar-xs" alt="" />
                                                    </div>
                                                    <div class="col ml-2">
                                                        <span>Ted Hawkins</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#!" class="text-muted bookmark">
                                                            <i class="fe fe-bookmark  "></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <!-- Card -->
                                        <div class="card mb-4 card-hover">
                                            <a href="course-single.html" class="card-img-top"><img src="../assets/images/course/course-angular.jpg" alt="" class="card-img-top rounded-top" /></a>
                                            <div class="card-body">
                                                <h4 class="mb-2 text-truncate-line-2"><a href="course-single.html" class="text-inherit">Angular -
                                    the complete guide for beginner</a></h4>
                                                <ul class="mb-3 list-inline">
                                                    <li class="list-inline-item"><i class="far fa-clock mr-1"></i>1h 30m</li>
                                                    <li class="list-inline-item">
                                                        <svg class="mr-1 mt-n1" width="16" height="16" viewBox="0
                                                    0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                                    <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
                                    <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                                    </svg> Beginner
                                                    </li>
                                                </ul>
                                                <div class="lh-1">
                                                    <span>
                                    <i class="mdi mdi-star text-warning mr-n1"></i>
                                    <i class="mdi mdi-star text-warning mr-n1"></i>
                                    <i class="mdi mdi-star text-warning mr-n1"></i>
                                    <i class="mdi mdi-star text-warning mr-n1"></i>
                                    <i class="mdi mdi-star text-warning"></i>
                                </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="font-size-xs text-muted">(8,890)</span>
                                                </div>
                                            </div>
                                            <!-- Card footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center no-gutters">
                                                    <div class="col-auto">
                                                        <img src="../assets/images/avatar/avatar-3.jpg" class="rounded-circle avatar-xs" alt="" />
                                                    </div>
                                                    <div class="col ml-2">
                                                        <span>Juanita Bell</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#!" class="text-muted bookmark">
                                                            <i class="fe fe-bookmark  "></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card mb-4 card-hover">
                                            <a href="course-single.html" class="card-img-top"><img src="../assets/images/course/course-python.jpg" alt="" class="card-img-top rounded-top" /></a>
                                            <div class="card-body">
                                                <h4 class="mb-2 text-truncate-line-2"><a href="course-single.html" class="text-inherit">The Python
                                    Course: build web application</a></h4>
                                                <ul class="mb-3 list-inline">
                                                    <li class="list-inline-item"><i class="far fa-clock mr-1"></i>2h 30m</li>
                                                    <li class="list-inline-item">
                                                        <svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                                    <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                                    <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                                    </svg> Intermediate
                                                    </li>
                                                </ul>
                                                <div class="lh-1">
                                                    <span>
                                    <i class="mdi mdi-star text-warning mr-n1"></i>
                                    <i class="mdi mdi-star text-warning mr-n1"></i>
                                    <i class="mdi mdi-star text-warning mr-n1"></i>
                                    <i class="mdi mdi-star text-warning mr-n1"></i>
                                    <i class="mdi mdi-star text-warning"></i>
                                </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="font-size-xs text-muted">(13,245)</span>
                                                </div>
                                            </div>
                                            <!-- Card footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center no-gutters">
                                                    <div class="col-auto">
                                                        <img src="../assets/images/avatar/avatar-4.jpg" class="rounded-circle avatar-xs" alt="" />
                                                    </div>
                                                    <div class="col ml-2">
                                                        <span>Claire Robertson</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#!" class="text-muted bookmark">
                                                            <i class="fe fe-bookmark  "></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

