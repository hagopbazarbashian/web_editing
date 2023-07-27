<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <base href="">
    <title>Are you ready to create your own website?</title>

    <link href="css/editor.css" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/ad4f482ede.js" crossorigin="anonymous"></script>
  </head>
<body>

	<div id="vvveb-builder">
				<div id="top-panel">
					<img style="width: 120px;" src="https://developsmart.xyz/img/logo.png" alt="Vvveb" class="float-start" id="logo">

					<div class="btn-group float-start" role="group">
					  <button class="btn btn-light" title="Toggle file manager" id="toggle-file-manager-btn" data-vvveb-action="toggleFileManager" data-bs-toggle="button" aria-pressed="false">
						  <img src="libs/builder/icons/file-manager-layout.svg" width="20px" height="20px">
					  </button>

					  <button class="btn btn-light" title="Toggle left column" id="toggle-left-column-btn" data-vvveb-action="toggleLeftColumn" data-bs-toggle="button" aria-pressed="false">
						  <img src="libs/builder/icons/left-column-layout.svg" width="20px" height="20px">
					  </button>

					  <button class="btn btn-light" title="Toggle right column" id="toggle-right-column-btn" data-vvveb-action="toggleRightColumn" data-bs-toggle="button" aria-pressed="false">
						  <img src="libs/builder/icons/right-column-layout.svg" width="20px" height="20px">
					  </button>
					</div>

					<div class="btn-group me-3" role="group">
					  <button class="btn btn-light" title="Undo (Ctrl/Cmd + Z)" id="undo-btn" data-vvveb-action="undo" data-vvveb-shortcut="ctrl+z">
						  <i class="la la-undo"></i>
					  </button>

            <button class="btn btn-light" title="Redo (Ctrl/Cmd + Shift + Z)" id="redo-btn" data-vvveb-action="redo" data-vvveb-shortcut="ctrl+shift+z">
              <i class="la la-undo la-flip-horizontal"></i>
					  </button>
					</div>


					<div class="btn-group me-3" role="group">
					  <button class="btn btn-light" title="Designer Mode (Free component dragging)" id="designer-mode-btn" data-bs-toggle="button" aria-pressed="false" data-vvveb-action="setDesignerMode">
						  <i class="la la-hand-rock"></i>
					  </button>

					  <button class="btn btn-light" title="Preview" id="preview-btn" type="button" data-bs-toggle="button" aria-pressed="false" data-vvveb-action="preview">
						  <i class="la la-eye"></i>
					  </button>

					  <button class="btn btn-light" title="Fullscreen (F11)" id="fullscreen-btn" data-bs-toggle="button" aria-pressed="false" data-vvveb-action="fullscreen">
						  <i class="la la-expand-arrows-alt"></i>
					  </button>

					  <button class="btn btn-light" title="Download" id="download-btn" data-vvveb-action="download" data-v-download="index.html">
						  <i class="la la-download"></i>
					  </button>

					</div>


					<div class="btn-group me-3 float-end" role="group">
					  <button class="btn btn-primary btn-icon" title="Export (Ctrl + E)" id="save-btn" data-vvveb-action="saveAjax" data-vvveb-url="save.php" data-v-vvveb-shortcut="ctrl+e">

						<span class="loading d-none">
						<i class="la la-save"></i>
						  <span class="spinner-border spinner-border-sm align-middle" role="status" aria-hidden="true">
						  </span>
						  <span>Saving </span> ... </span>

						<span class="button-text">
						  <i class="la la-save"></i> <span>Save page</span>
						</span>

					  </button>
					</div>


					  <div class="float-end me-3">

					    <button class="btn btn-light border-0 btn-sm btn-dark-mode" data-vvveb-action="darkMode">
							<!-- i class="la la-adjust la-lg"></i -->
							<i class="la la-sun la-lg"></i>
						</button>

					    <a href="#" class="btn btn-outline-primary border-0 btn-sm btn-preview-url" target="blank">
							View page <i class="la la-external-link-alt la-lg"></i>
						</a>

					    <div class="btn-group responsive-btns" role="group">


		 			 <button id="mobile-view" data-view="mobile" class="btn btn-light"  title="Mobile view" data-vvveb-action="viewport">
						  <i class="la la-mobile"></i>
					  </button>

					  <button id="tablet-view"  data-view="tablet" class="btn btn-light"  title="Tablet view" data-vvveb-action="viewport">
						  <i class="la la-tablet"></i>
					  </button>

					  <button id="desktop-view"  data-view="" class="btn btn-light"  title="Desktop view" data-vvveb-action="viewport">
						  <i class="la la-laptop"></i>
					  </button>

                      <button id="desktop-view"  href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();" data-view="" class="btn btn-light"  title="Desktop view" data-vvveb-action="viewport">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                      </button>

                        {{-- <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a> --}}

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>


					</div>

				</div>

     				   </div>


				<div id="left-panel">

					  <div id="filemanager">
							<div class="header">
								<span class="text-secondary"><i class="la la-file la-lg"></i> Pages</span>

									<div class="btn-group responsive-btns me-1 float-end" role="group">
									  <button class="btn btn-outline-primary btn-sm border-0" title="New file" id="new-file-btn" data-vvveb-action="newPage" data-vvveb-shortcut="">
										   <span>New page</span> <i class="la la-plus"></i>
									  </button>

									  <!--  &ensp;
									  <button class="btn btn-link text-dark p-0"  title="Delete file" id="delete-file-btn" data-vvveb-action="deletePage" data-vvveb-shortcut="">
										  <i class="la la-trash"></i> <small>Delete</small>
									  </button> -->
									</div>

								</div>

								<div class="tree">
									<ol>
									</ol>
								</div>
					  </div>


					 <div class="drag-elements">

						<div class="header">
							<ul class="nav nav-tabs  nav-fill" id="elements-tabs" role="tablist">
							  <li class="nav-item sections-tab">
								<a class="nav-link active" id="sections-tab" data-bs-toggle="tab" href="#sections" role="tab" aria-controls="sections" aria-selected="true" title="Sections">
									<i class="la la-stream"></i>
									<!-- img src="../../../js/vvvebjs/icons/list_group.svg" height="23" -->
									<!-- div><small>Sections</small></div -->
								</a>
							  </li>
							  <li class="nav-item component-tab">
								<a class="nav-link" id="components-tab" data-bs-toggle="tab" href="#components-tabs" role="tab" aria-controls="components" aria-selected="false" title="Components">
									<i class="la la-box"></i>
									<!-- img src="../../../js/vvvebjs/icons/product.svg" height="23" -->
									<!-- div><small>Components</small></div -->
								</a>
							  </li>
							  <!-- li class="nav-item sections-tab">
								<a class="nav-link" id="sections-tab" data-bs-toggle="tab" href="#sections" role="tab" aria-controls="sections" aria-selected="false" title="Sections"><img src="../../../js/vvvebjs/icons/list_group.svg" width="24" height="23"> <div><small>Sections</small></div></a>
							  </li -->
							  <li class="nav-item component-properties-tab" style="display:none">
								<a class="nav-link" id="properties-tab" data-bs-toggle="tab" href="#properties" role="tab" aria-controls="properties" aria-selected="false" title="Properties">
									<i class="la la-cog"></i>
									<!-- img src="../../../js/vvvebjs/icons/filters.svg" height="23"-->
									<!-- div><small>Properties</small></div -->
								</a>
							  </li>
							  <li class="nav-item component-configuration-tab">
								<a class="nav-link" id="configuration-tab" data-bs-toggle="tab" href="#configuration" role="tab" aria-controls="configuration" aria-selected="false" title="Configuration">
									<i class="la la-tools"></i>
									<!-- img src="../../../js/vvvebjs/icons/filters.svg" height="23"-->
									<!-- div><small>Properties</small></div -->
								</a>
							  </li>
							</ul>

							<div class="tab-content">


							  <div class="tab-pane show active sections" id="sections" role="tabpanel" aria-labelledby="sections-tab">


										<ul class="nav nav-tabs nav-fill sections-tabs" id="properties-tabs" role="tablist">
										  <li class="nav-item content-tab">
											<a class="nav-link active" data-bs-toggle="tab" href="#sections-new-tab" role="tab" aria-controls="components" aria-selected="false">
												<i class="la la-plus"></i> <div><span>Add section</span></div></a>
										  </li>
										  <li class="nav-item style-tab">
											<a class="nav-link" data-bs-toggle="tab" href="#sections-list" role="tab" aria-controls="sections" aria-selected="true">
												<i class="la la-th-list"></i> <div><span>Page Sections</span></div></a>
										  </li>
										</ul>

										<div class="tab-content">

											 <div class="tab-pane" id="sections-list" data-section="style" role="tabpanel" aria-labelledby="style-tab">
												<div class="drag-elements-sidepane sidepane">
												  <div>
													<div class="sections-container p-4">

															<div class="section-item" draggable="true">
																<div class="controls">
																	<div class="handle"></div>
																	<div class="info">
																		<div class="name">&nbsp;
																			<div class="type">&nbsp;</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="section-item" draggable="true">
																<div class="controls">
																	<div class="handle"></div>
																	<div class="info">
																		<div class="name">&nbsp;
																			<div class="type">&nbsp;</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="section-item" draggable="true">
																<div class="controls">
																	<div class="handle"></div>
																	<div class="info">
																		<div class="name">&nbsp;
																			<div class="type">&nbsp;</div>
																		</div>
																	</div>
																</div>
															</div>
															<!-- div class="section-item" draggable="true">
																<div class="controls">
																	<div class="handle"></div>
																	<div class="info">
																		<div class="name">welcome area
																			<div class="type">section</div>
																		</div>
																	</div>
																	<div class="buttons"> <a class="delete-btn" href="" title="Remove section"><i class="la la-trash text-danger"></i></a>

																		<a class="properties-btn" href="" title="Properties"><i class="la la-cog"></i></a> </div>
																</div>
																<input class="header_check" type="checkbox" id="section-components-9338">
																<label for="section-components-9338">
																	<div class="header-arrow"></div>
																</label>
																<div class="tree">
																	<ol></ol>
																</div>
															</div -->


													  </div>
													</div>
												</div>
											</div>

											<div class="tab-pane show active" id="sections-new-tab" data-section="content" role="tabpanel" aria-labelledby="content-tab">


													   <div class="search">
															  <div class="expand">
																  <button class="text-sm" title="Expand All" data-vvveb-action="expand"><i class="la la-plus"></i></button>
																  <button title="Collapse all" data-vvveb-action="collapse"><i class="la la-minus"></i></button>
															  </div>

															  <input class="form-control section-search" placeholder="Search sections" type="text" data-vvveb-action="search" data-vvveb-on="keyup">
															  <button class="clear-backspace"  data-vvveb-action="clearSearch" title="Clear search">
																  <i class="la la-times"></i>
															  </button>
														</div>


														<div class="drag-elements-sidepane sidepane">
															  <div class="block-preview"><img src="" style="display:none"></div>
															  <div>
                                                                {{-- template --}}
																<ul class="sections-list clearfix" data-type="leftpanel"></ul>
                                                                {{-- template --}}
															  </div>
														</div>

											</div>

										</div>

							  </div>

								<div class="tab-pane show" id="components-tabs" role="tabpanel" aria-labelledby="components-tab">


										<ul class="nav nav-tabs nav-fill sections-tabs" role="tablist">
										  <li class="nav-item components-tab">
											<a class="nav-link active" data-bs-toggle="tab" href="#components" role="tab" aria-controls="components" aria-selected="true">
												<i class="la la-box"></i> <div><span>Components</span></div></a>
										  </li>
										  <li class="nav-item blocks-tab">
											<a class="nav-link" data-bs-toggle="tab" href="#blocks" role="tab" aria-controls="components" aria-selected="false">
												<i class="la la-copy"></i> <div><span>Blocks</span></div></a>
										  </li>
										</ul>

										<div class="tab-content">

											 <div class="tab-pane show active components" id="components" data-section="components" role="tabpanel" aria-labelledby="components-tab">

												   <div class="search">
														  <div class="expand">
																  <button class="text-sm" title="Expand All" data-vvveb-action="expand"><i class="la la-plus"></i></button>
																  <button title="Collapse all" data-vvveb-action="collapse"><i class="la la-minus"></i></button>
														  </div>

														  <input class="form-control component-search" placeholder="Search components" type="text" data-vvveb-action="search" data-vvveb-on="keyup">
														  <button class="clear-backspace" data-vvveb-action="clearSearch">
															  <i class="la la-times"></i>
															</button>
													</div>

													<div class="drag-elements-sidepane sidepane">
														 <div>

														<ul class="components-list clearfix" data-type="leftpanel">
														</ul>

													</div>
												</div>
											</div>



											<div class="tab-pane show active blocks" id="blocks" data-section="content" role="tabpanel" aria-labelledby="content-tab">

													   <div class="search">
															  <div class="expand">
																  <button class="text-sm" title="Expand All" data-vvveb-action="expand"><i class="la la-plus"></i></button>
																  <button title="Collapse all" data-vvveb-action="collapse"><i class="la la-minus"></i></button>
															  </div>

															  <input class="form-control block-search" placeholder="Search blocks" type="text" data-vvveb-action="search" data-vvveb-on="keyup">
															  <button class="clear-backspace" data-vvveb-action="clearSearch">
																  <i class="la la-times"></i>
															  </button>
														</div>


														<div class="drag-elements-sidepane sidepane">
															  <div class="block-preview"><img src=""></div>
															  <div>
																<ul class="blocks-list clearfix" data-type="leftpanel">
																</ul>

															  </div>
														</div>
											</div>

										</div>
							</div>

								<div class="tab-pane" id="properties" role="tabpanel" aria-labelledby="properties-tab">
									<div class="component-properties-sidepane">
										<div>
											<div class="component-properties">
												<ul class="nav nav-tabs nav-fill" id="properties-tabs" role="tablist">
													  <li class="nav-item content-tab">
														<a class="nav-link content-tab active" data-bs-toggle="tab" href="#content-left-panel-tab" role="tab" aria-controls="components" aria-selected="true">
															<i class="la la-lg la-sliders-h"></i> <div><span>Content</span></div>
														</a>
													  </li>
													  <li class="nav-item style-tab">
														<a class="nav-link" data-bs-toggle="tab" href="#style-left-panel-tab" role="tab" aria-controls="style" aria-selected="false">
															<i class="la la-lg la-paint-brush"></i> <div><span>Style</span></div></a>
													  </li>
													  <li class="nav-item advanced-tab">
														<a class="nav-link" data-bs-toggle="tab" href="#advanced-left-panel-tab" role="tab" aria-controls="advanced" aria-selected="false">
															<i class="la la-lg la-tools"></i> <div><span>Advanced</span></div></a>
													  </li>
													</ul>

													<div class="tab-content">
														 <div class="tab-pane show active" id="content-left-panel-tab" data-section="content" role="tabpanel" aria-labelledby="content-tab">
															<div class="alert alert-dismissible fade show alert-light m-3" role="alert" style="">
																<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
																<strong>No selected element!</strong><br> Click on an element to edit.
															</div>
														</div>

														 <div class="tab-pane show" id="style-left-panel-tab" data-section="style" role="tabpanel" aria-labelledby="style-tab">
														 </div>

														 <div class="tab-pane show" id="advanced-left-panel-tab" data-section="advanced"  role="tabpanel" aria-labelledby="advanced-tab">
														</div>
													</div>
											</div>
										</div>
									</div>
							  </div>

								<div class="tab-pane" id="configuration" role="tabpanel" aria-labelledby="configuration-tab">

									<div class="drag-elements-sidepane sidepane">
									<div>
										<div class="component-properties">
											<!-- color palette -->
											<!--
											<label class="header" data-header="default" for="header_pallette"><span>Global styles</span>
												<div class="header-arrow"></div>
											</label> -->
											<input class="header_check" type="checkbox" checked="true" id="header_pallette">
											<div class="tab-pane section px-0" data-section="content">


												<div class="mb-3  col-sm-6  inline " data-key="background-color">      <label class=" form-label" for="input-model">Background Color</label>      <div class=" input"><div>   <input name="background-color" type="color" pattern="#[a-f0-9]{6}" class="form-control form-control-color">  </div></div>     </div>



												<div class="mb-3  col-sm-6  inline " data-key="background-color">      <label class=" form-label" for="input-model">Background Color</label>      <div class=" input"><div>   <input name="background-color" type="color" pattern="#[a-f0-9]{6}" class="form-control form-control-color">  </div></div>     </div>




											</div>


											<!-- typography -->
											<!--
											<label class="header" data-header="element_header" for="header_element_typography"><span>Typography</span>
												<div class="header-arrow"></div>
											</label>

											<input class="header_check" type="checkbox" checked="true" id="header_element_typography">
											<div class="section" data-section="element_header">

											</div>
											-->

									</div>
								</div>
								</div>


								</div><!-- end configuration tab -->

							</div>
						</div>

					  </div>
				</div>


				<div id="canvas">
					<div id="iframe-wrapper">
						<div id="iframe-layer">

							<div class="loading-message active">
									<div class="animation-container">
									  <div class="dot dot-1"></div>
									  <div class="dot dot-2"></div>
									  <div class="dot dot-3"></div>
									</div>

									<svg xmlns="http://www.w3.org/2000/svg" version="1.1">
									  <defs>
										<filter id="goo">
										  <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
										  <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 21 -7"/>
										</filter>
									  </defs>
									</svg>
									<!-- https://codepen.io/Izumenko/pen/MpWyXK -->
							</div>

							<div id="highlight-box">
								<div id="highlight-name">
								  <span class="name"></span>
								  <span class="type"></span>
								</div>

								<div id="section-actions">
									<a id="add-section-btn" href="" title="Add element"><i class="la la-plus"></i></a>
								</div>
							</div>

							<div id="select-box">

								<div id="wysiwyg-editor" class="default-editor">
										<!--
										<a id="bold-btn" href="" title="Bold">
											<svg height="24" viewBox="0 0 256 256" width="24" xmlns="http://www.w3.org/2000/svg">
												<path clip-rule="evenodd" d="M56 40V216H148C176.719 216 200 192.719 200 164C200 147.849 192.637 133.418 181.084 123.88C187.926 115.076 192 104.014 192 92C192 63.2812 168.719 40 140 40H56ZM88 144V184H148C159.046 184 168 175.046 168 164C168 152.954 159.046 144 148 144H88ZM88 112V72H140C151.046 72 160 80.9543 160 92C160 103.046 151.046 112 140 112H88Z" fill="#252525" fill-rule="evenodd"/>
											</svg>
										</a>
										<a id="italic-btn" href="" title="Italic">
											<svg height="24" viewBox="0 0 256 256" width="24" xmlns="http://www.w3.org/2000/svg">
												<path d="M202 40H84V64H126.182L89.8182 192H54V216H172V192H129.818L166.182 64H202V40Z" fill="#252525"/>
											</svg>
										</a>
										<a id="underline-btn" href="" title="Underline">
											<svg height="24" viewBox="0 0 256 256" width="24" xmlns="http://www.w3.org/2000/svg">
												<path clip-rule="evenodd" d="M88 40H60V108.004C60 145.56 90.4446 176.004 128 176.004C165.555 176.004 196 145.56 196 108.004V40H168V108C168 130.091 150.091 148 128 148C105.909 148 88 130.091 88 108V40ZM204 216V192H52V216H204Z" fill="#252525" fill-rule="evenodd"/>
											</svg>
										</a>
										-->

										<a id="bold-btn" class="hint" href="" title="Bold" aria-label="Bold">
											<svg height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
												<path d="M6,4h8a4,4,0,0,1,4,4h0a4,4,0,0,1-4,4H6Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
												<path d="M6,12h9a4,4,0,0,1,4,4h0a4,4,0,0,1-4,4H6Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
											</svg>
										</a>
										<a id="italic-btn" class="hint" href="" title="Italic" aria-label="Italic">
											<svg height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
												<line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="19" x2="10" y1="4" y2="4"/>
                                                <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="14" x2="5" y1="20" y2="20"/>
												<line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="15" x2="9" y1="4" y2="20"/>
											</svg>
										</a>
										<a id="underline-btn" class="hint" href="" title="Underline" aria-label="Underline">
											<svg height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
												<path d="M6,4v7a6,6,0,0,0,6,6h0a6,6,0,0,0,6-6V4" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" y1="2" y2="2"/>
												<line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="4" x2="20" y1="22" y2="22"/>
											</svg>
										</a>


										<a id="strike-btn" class="hint" href="" title="Strikeout" aria-label="Strikeout">
											<del>S</del>
										</a>

										<div class="dropdown">
										  <a class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<span class="hint" aria-label="Text align"><i class="la la-align-left"></i></span>
										  </a>

										  <div id="justify-btn" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<a class="dropdown-item" href="#" data-value="Left"><i class="la la-lg la-align-left"></i> Align Left</a>
											<a class="dropdown-item" href="#" data-value="Center"><i class="la la-lg la-align-center"></i> Align Center</a>
											<a class="dropdown-item" href="#" data-value="Right"><i class="la la-lg la-align-right"></i> Align Right</a>
											<a class="dropdown-item" href="#" data-value="Full"><i class="la la-lg la-align-justify"></i> Align Justify</a>
										  </div>
										</div>

										<div class="separator"></div>

										<a id="link-btn" class="hint" href="" title="Create link" aria-label="Create link">
											<i class="la la-link">
										</i></a>

										<div class="separator"></div>

										<input id="fore-color" name="color" type="color" aria-label="Text color" pattern="#[a-f0-9]{6}" class="form-control form-control-color hint">
										<input id="back-color" name="background-color" type="color" aria-label="Background color" pattern="#[a-f0-9]{6}" class="form-control form-control-color hint">

										<div class="separator"></div>

										<select id="font-size" class="form-select" aria-label="Font size">
											<option value="">- Font size -</option>
											<option value="8px">8 px</option>
											<option value="9px">9 px</option>
											<option value="10px">10 px</option>
											<option value="11px">11 px</option>
											<option value="12px">12 px</option>
											<option value="13px">13 px</option>
											<option value="14px">14 px</option>
											<option value="15px">15 px</option>
											<option value="16px">16 px</option>
											<option value="17px">17 px</option>
											<option value="18px">18 px</option>
											<option value="19px">19 px</option>
											<option value="20px">20 px</option>
											<option value="21px">21 px</option>
											<option value="22px">22 px</option>
											<option value="23px">23 px</option>
											<option value="24px">24 px</option>
											<option value="25px">25 px</option>
											<option value="26px">26 px</option>
											<option value="27px">27 px</option>
											<option value="28px">28 px</option>
										</select>

										<div class="separator"></div>

										<select id="font-family" class="form-select" title="Font family">
											<option value=""> - Font family - </option>
											<optgroup label="System default">
												<option value="Arial, Helvetica, sans-serif">Arial</option>
												<option value="'Lucida Sans Unicode', 'Lucida Grande', sans-serif">Lucida Grande</option>
												<option value="'Palatino Linotype', 'Book Antiqua', Palatino, serif">Palatino Linotype</option>
												<option value="'Times New Roman', Times, serif">Times New Roman</option>
												<option value="Georgia, serif">Georgia, serif</option>
												<option value="Tahoma, Geneva, sans-serif">Tahoma</option>
												<option value="'Comic Sans MS', cursive, sans-serif">Comic Sans</option>
												<option value="Verdana, Geneva, sans-serif">Verdana</option>
												<option value="Impact, Charcoal, sans-serif">Impact</option>
												<option value="'Arial Black', Gadget, sans-serif">Arial Black</option>
												<option value="'Trebuchet MS', Helvetica, sans-serif">Trebuchet</option>
												<option value="'Courier New', Courier, monospace">Courier New</option>
												<option value="'Brush Script MT', sans-serif">Brush Script</option>
											</optgroup>
										</select>
								</div>

								<div id="select-actions">
									<a id="drag-btn" href="" title="Drag element"><i class="la la-arrows-alt"></i></a>
									<a id="parent-btn" href="" title="Select parent" class="la-rotate-180"><i class="la la-level-up-alt"></i></a>

									<a id="up-btn" href="" title="Move element up"><i class="la la-arrow-up"></i></a>
									<a id="down-btn" href="" title="Move element down"><i class="la la-arrow-down"></i></a>
									<a id="clone-btn" href="" title="Clone element"><i class="la la-copy"></i></a>
									<a id="delete-btn" href="" title="Remove element"><i class="la la-trash"></i></a>
								</div>

								<div class="resize">
									<!-- top -->
									<div class="top-left">
									</div>
									<div class="top-center">
									</div>
									<div class="top-right">
									</div>
									<!-- center -->
									<div class="center-left">
									</div>
									<div class="center-right">
									</div>
									<!-- bottom -->
									<div class="bottom-left">
									</div>
									<div class="bottom-center">
									</div>
									<div class="bottom-right">
									</div>
								</div>

							</div>

							<!-- add section box -->
							<div id="add-section-box" class="drag-elements">

									<div class="header">
										<ul class="nav nav-tabs" id="box-elements-tabs" role="tablist">
										  <li class="nav-item component-tab">
											<a class="nav-link active" id="box-components-tab" data-bs-toggle="tab" href="#box-components" role="tab" aria-controls="components" aria-selected="true"><i class="la la-lg la-cube"></i> <div><small>Components</small></div></a>
										  </li>
										  <li class="nav-item sections-tab">
											<a class="nav-link" id="box-sections-tab" data-bs-toggle="tab" href="#box-blocks" role="tab" aria-controls="blocks" aria-selected="false"><i class="la la-lg la-image"></i> <div><small>Blocks</small></div></a>
										  </li>
                          <!--
										  <li class="nav-item component-properties-tab" style="display:none">
											<a class="nav-link" id="box-properties-tab" data-bs-toggle="tab" href="#box-properties" role="tab" aria-controls="properties" aria-selected="false"><i class="la la-lg la-cog"></i> <div><small>Properties</small></div></a>
										  </li>
                          -->
										</ul>

										<div class="section-box-actions">

											<div id="close-section-btn" class="btn btn-light btn-sm bg-white btn-sm float-end"><i class="la la-times la-lg"></i></div>

							<div class="mt-2 me-3 float-end">

								<div class="form-check d-inline-block me-1">
												  <input type="radio" id="add-section-insert-mode-after" value="after" checked="checked" name="add-section-insert-mode" class="form-check-input">
								  <label class="form-check-label small" for="add-section-insert-mode-after">After</label>
												</div>

								<div class="form-check d-inline-block">
												  <input type="radio" id="add-section-insert-mode-inside" value="inside" name="add-section-insert-mode" class="form-check-input">
								  <label class="form-check-label small" for="add-section-insert-mode-inside">Inside</label>
												</div>

											</div>

										</div>

										<div class="tab-content">
										  <div class="tab-pane show active" id="box-components" role="tabpanel" aria-labelledby="components-tab">

											   <div class="search">
													  <div class="expand">
														  <button class="text-sm" title="Expand All" data-vvveb-action="expand"><i class="la la-plus"></i></button>
														  <button title="Collapse all" data-vvveb-action="collapse"><i class="la la-minus"></i></button>
													  </div>

													  <input class="form-control component-search" placeholder="Search components" type="text" data-vvveb-action="search" data-vvveb-on="keyup">
													  <button class="clear-backspace" data-vvveb-action="clearSearch">
														  <i class="la la-times"></i>
													  </button>
												  </div>

												<div>
												  <div>

													<ul class="components-list clearfix" data-type="addbox">
													</ul>

												  </div>
												</div>

										  </div>
										  <div class="tab-pane" id="box-blocks" role="tabpanel" aria-labelledby="blocks-tab">

											   <div class="search">
													  <div class="expand">
														  <button class="text-sm" title="Expand All" data-vvveb-action="expand"><i class="la la-plus"></i></buttona>
														  <button title="Collapse all" data-vvveb-action="collapse"><i class="la la-minus"></i></button>
													  </div>

													  <input class="form-control block-search" placeholder="Search blocks" type="text" data-vvveb-action="search" data-vvveb-on="keyup">
													  <button class="clear-backspace"  data-vvveb-action="clearSearch">
														  <i class="la la-times"></i>
													  </button>
												  </div>

												<div>
												  <div>

													<ul class="blocks-list clearfix"  data-type="addbox">
													</ul>

												  </div>
												</div>

										  </div>

											<!-- div class="tab-pane" id="box-properties" role="tabpanel" aria-labelledby="blocks-tab">
												<div class="component-properties-sidepane">
													<div>
														<div class="component-properties">
															<div class="mt-4 text-center">Click on an element to edit.</div>
														</div>
													</div>
												</div>
											</div -->
										</div>
									</div>

							</div>
							<!-- //add section box -->

							<div id="drop-highlight-box">
							</div>
						</div>


						<iframe src="" id="iframe1">
						</iframe>
					</div>


				</div>

				<div id="right-panel">
					<div class="component-properties">

						<ul class="nav nav-tabs nav-fill" id="properties-tabs" role="tablist">
							  <li class="nav-item content-tab">
								<a class="nav-link active" data-bs-toggle="tab" href="#content-tab" role="tab" aria-controls="components" aria-selected="true">
									<i class="la la-lg la-sliders-h"></i> <div><span>Content</span></div></a>
							  </li>
							  <li class="nav-item style-tab">
								<a class="nav-link" data-bs-toggle="tab" href="#style-tab" role="tab" aria-controls="blocks" aria-selected="false">
									<i class="la la-lg la-paint-brush"></i> <div><span>Style</span></div></a>
							  </li>
							  <li class="nav-item advanced-tab">
								<a class="nav-link" data-bs-toggle="tab" href="#advanced-tab" role="tab" aria-controls="blocks" aria-selected="false">
									<i class="la la-lg la-tools"></i> <div><span>Advanced</span></div></a>
							  </li>
							</ul>

							<div class="tab-content">
								 <div class="tab-pane show active" id="content-tab" data-section="content" role="tabpanel" aria-labelledby="content-tab">
									<div class="alert alert-dismissible fade show alert-light m-3" role="alert" style="">
										<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
										<strong>No selected element!</strong><br> Click on an element to edit.
									</div>
								</div>

								 <div class="tab-pane show" id="style-tab" data-section="style" role="tabpanel" aria-labelledby="style-tab">
								</div>

								 <div class="tab-pane show" id="advanced-tab" data-section="advanced"  role="tabpanel" aria-labelledby="advanced-tab">
								</div>


							</div>



					</div>
				</div>

				<div id="bottom-panel">

						<div>

							<div class="breadcrumb-navigator px-2" style="--bs-breadcrumb-divider: '>';">

							  <ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">body</a></li>
								<li class="breadcrumb-item"><a href="#">section</a></li>
								<li class="breadcrumb-item"><a href="#">img</a></li>
							  </ol>
							</div>


							<div class="btn-group" role="group">

								<div id="toggleEditorJsExecute" class="form-check mt-1" style="display:none">
									<input type="checkbox" class="form-check-input" id="runjs" name="runjs" data-vvveb-action="toggleEditorJsExecute">
									<label class="form-check-label" for="runjs"><small>Run javascript code on edit</small></label>&ensp;
								</div>


								  <button id="code-editor-btn" data-view="mobile" class="btn btn-sm btn-light btn-sm"  title="Code editor" data-vvveb-action="toggleEditor">
									  <i class="la la-code"></i> Code editor
								  </button>


							</div>

						</div>

						<div id="vvveb-code-editor">
							<textarea class="form-control"></textarea>
						<div>

				</div>
			</div>
		</div>


<!-- templates -->

<script id="vvveb-input-textinput" type="text/html">

	<div>
		<input name="{%=key%}" type="text" class="form-control"/>
	</div>

</script>

<script id="vvveb-input-textareainput" type="text/html">

	<div>
		<textarea name="{%=key%}" {% if (typeof rows !== 'undefined') { %} rows="{%=rows%}" {% } else { %} rows="3" {% } %} class="form-control"/>
	</div>

</script>

<script id="vvveb-input-checkboxinput" type="text/html">

	<div class="form-check{% if (typeof className !== 'undefined') { %} {%=className%}{% } %}">
		  <input name="{%=key%}" class="form-check-input" type="checkbox" id="{%=key%}_check">
		  <label class="form-check-label" for="{%=key%}_check">{% if (typeof text !== 'undefined') { %} {%=text%} {% } %}</label>
	</div>

</script>

<script id="vvveb-input-radioinput" type="text/html">

	<div>

		{% for ( var i = 0; i < options.length; i++ ) { %}

		<label class="form-check-input  {% if (typeof inline !== 'undefined' && inline == true) { %}custom-control-inline{% } %}"  title="{%=options[i].title%}">
		  <input name="{%=key%}" class="form-check-input" type="radio" value="{%=options[i].value%}" id="{%=key%}{%=i%}" {%if (options[i].checked) { %}checked="{%=options[i].checked%}"{% } %}>
		  <label class="form-check-label" for="{%=key%}{%=i%}">{%=options[i].text%}</label>
		</label>

		{% } %}

	</div>

</script>

<script id="vvveb-input-radiobuttoninput" type="text/html">

	<div class="btn-group {%if (extraclass) { %}{%=extraclass%}{% } %} clearfix" role="group">
		{% var namespace = 'rb-' + Math.floor(Math.random() * 100); %}

		{% for ( var i = 0; i < options.length; i++ ) { %}

		<input name="{%=key%}" class="btn-check" type="radio" value="{%=options[i].value%}" id="{%=namespace%}{%=key%}{%=i%}" {%if (options[i].checked) { %}checked="{%=options[i].checked%}"{% } %} autocomplete="off">
		<label class="btn btn-outline-primary {%if (options[i].extraclass) { %}{%=options[i].extraclass%}{% } %}" for="{%=namespace%}{%=key%}{%=i%}" title="{%=options[i].title%}">
		  {%if (options[i].icon) { %}<i class="{%=options[i].icon%}"></i>{% } %}
		  {%=options[i].text%}
		</label>

		{% } %}

	</div>

</script>


<script id="vvveb-input-toggle" type="text/html">

    <div class="form-check form-switch">
        <input
		type="checkbox"
		name="{%=key%}"
		value="{%=on%}"
		{%if (off) { %} data-value-off="{%=off%}" {% } %}
		{%if (on) { %} data-value-on="{%=on%}" {% } %}
		class="form-check-input" type="checkbox" role="switch"
		id="{%=key%}">
        <label class="form-check-label"for="{%=key%}">
        </label>
    </div>

</script>

<script id="vvveb-input-header" type="text/html">

		<h6 class="header">{%=header%}</h6>

</script>


<script id="vvveb-input-select" type="text/html">

	<div>

		<select class="form-select" name="{%=key%}">
			{% var optgroup = false; for ( var i = 0; i < options.length; i++ ) { %}
				{% if (options[i].optgroup) {  %}
					{% if (optgroup) {  %}
						</optgroup>
					{% } %}
					<optgroup label="{%=options[i].optgroup%}">
				{% optgroup = true; } else { %}
			<option value="{%=options[i].value%}"
				{%
					for (attr in options[i]) {
							if (attr != "value" && attr != "text") {
						 %}
							{%=attr%}={%=options[i][attr]%}
						{% }
					} %}>
			{%=options[i].text%}</option>
			{% } } %}
		</select>

	</div>

</script>

<script id="vvveb-input-icon-select" type="text/html">

	<div class="input-list-select">

		<div class="elements">
			<div class="row">
				{% for ( var i = 0; i < options.length; i++ ) { %}
				<div class="col">
					<div class="element">
						{%=options[i].value%}
						<label>{%=options[i].text%}</label>
					</div>
				</div>
				{% } %}
			</div>
		</div>
	</div>

</script>

<script id="vvveb-input-html-list-select" type="text/html">

	<div class="input-html-list-select">

		<div class="current-element">

		</div>

		<div class="popup">
			<select class="form-select">
				{% var optgroup = false; for ( var i = 0; i < options.length; i++ ) { %}
					{% if (options[i].optgroup) {  %}
						{% if (optgroup) {  %}
							</optgroup>
						{% } %}
						<optgroup label="{%=options[i].optgroup%}">
					{% optgroup = true; } else { %}
					<option value="{%=options[i].value%}">{%=options[i].text%}</option>
				{% } } %}
			</select>

		      <div class="search">
				  <input class="form-control search" placeholder="Search elements" type="text">
				  <button class="clear-backspace">
					  <i class="la la-times"></i>
				  </button>
			</div>

			<div class="elements">
					{%=elements%}
				</div>
			</div>
		</div>
	</div>

</script>

<script id="vvveb-input-html-list-dropdown" type="text/html">

	<div class="input-html-list-select" {% if (typeof id !== "undefined") { %} id={%=id%} {% } %}>

		<div class="current-element">

		</div>

		<div class="popup">
			<select class="form-select">
				{% var optgroup = false; for ( var i = 0; i < options.length; i++ ) { %}
					{% if (options[i].optgroup) {  %}
						{% if (optgroup) {  %}
							</optgroup>
						{% } %}
						<optgroup label="{%=options[i].optgroup%}">
					{% optgroup = true; } else { %}
					<option value="{%=options[i].value%}">{%=options[i].text%}</option>
				{% } } %}
			</select>

		      <div class="search">
				  <input class="form-control search" placeholder="Search elements" type="text">
				  <button class="clear-backspace">
					  <i class="la la-times"></i>
				  </button>
			</div>

			<div class="elements">
					{%=elements%}
				</div>
			</div>
		</div>
	</div>

</script>

<script id="vvveb-input-dateinput" type="text/html">

	<div>
		<input name="{%=key%}" type="date" class="form-control"
			{% if (typeof min_date === 'undefined') { %} min="{%=min_date%}" {% } %} {% if (typeof max_date === 'undefined') { %} max="{%=max_date%}" {% } %}
		/>
	</div>

</script>

<script id="vvveb-input-listinput" type="text/html">

	<div class="row">

		{% for ( var i = 0; i < options.length; i++ ) { %}
		<div class="col-6">
			<div class="input-group">
				<input name="{%=key%}_{%=i%}" type="text" class="form-control" value="{%=options[i].text%}"/>
				<div class="input-group-append">
					<button class="input-group-text btn btn-sm btn-danger">
						<i class="la la-trash la-lg"></i>
					</button>
				</div>
			  </div>
			  <br/>
		</div>
		{% } %}


		{% if (typeof hide_remove === 'undefined') { %}
		<div class="col-12">

			<button class="btn btn-sm btn-outline-primary">
				<i class="la la-trash la-lg"></i> Add new
			</button>

		</div>
		{% } %}

	</div>

</script>

<script id="vvveb-input-grid" type="text/html">

	<div class="row">
		<div class="col-6">

			<label>Extra small</label>
			<select class="form-select" name="col">

				<option value="">None</option>
				{% for ( var i = 1; i <= 12; i++ ) { %}
				<option value="{%=i%}" {% if ((typeof col !== 'undefined') && col == i) { %} selected {% } %}>{%=i%}</option>
				{% } %}

			</select>
		</div>


		<div class="col-6">
			<label>Small</label>
			<select class="form-select" name="col-sm">

				<option value="">None</option>
				{% for ( var i = 1; i <= 12; i++ ) { %}
				<option value="{%=i%}" {% if ((typeof col_sm !== 'undefined') && col_sm == i) { %} selected {% } %}>{%=i%}</option>
				{% } %}

			</select>
		</div>

		<div class="col-6">
			<label>Medium</label>
			<select class="form-select" name="col-md">

				<option value="">None</option>
				{% for ( var i = 1; i <= 12; i++ ) { %}
				<option value="{%=i%}" {% if ((typeof col_md !== 'undefined') && col_md == i) { %} selected {% } %}>{%=i%}</option>
				{% } %}

			</select>
		</div>

		<div class="col-6">
			<label>Large</label>
			<select class="form-select" name="col-lg">

				<option value="">None</option>
				{% for ( var i = 1; i <= 12; i++ ) { %}
				<option value="{%=i%}" {% if ((typeof col_lg !== 'undefined') && col_lg == i) { %} selected {% } %}>{%=i%}</option>
				{% } %}

			</select>
		</div>


		<div class="col-6">
			<label>Extra large </label>
			<select class="form-select" name="col-xl">

				<option value="">None</option>
				{% for ( var i = 1; i <= 12; i++ ) { %}
				<option value="{%=i%}" {% if ((typeof col_lg !== 'undefined') && col_lg == i) { %} selected {% } %}>{%=i%}</option>
				{% } %}

			</select>
		</div>

		<div class="col-6">
			<label>Extra extra large</label>
			<select class="form-select" name="col-xxl">

				<option value="">None</option>
				{% for ( var i = 1; i <= 12; i++ ) { %}
				<option value="{%=i%}" {% if ((typeof col_lg !== 'undefined') && col_lg == i) { %} selected {% } %}>{%=i%}</option>
				{% } %}

			</select>
		</div>

		{% if (typeof hide_remove === 'undefined') { %}
		<div class="col-12">

			<button class="btn btn-sm btn-outline-light text-danger">
				<i class="la la-trash la-lg"></i> Remove
			</button>

		</div>
		{% } %}

	</div>

</script>

<script id="vvveb-input-textvalue" type="text/html">

	<div class="row">
		<div class="col-6 mb-1">
			<label>Value</label>
			<input name="value" type="text" value="{%=value%}" class="form-control" autocomplete="off" />
		</div>

		<div class="col-6 mb-1">
			<label>Text</label>
			<input name="text" type="text" value="{%=text%}" class="form-control" autocomplete="off" />
		</div>

		{% if (typeof hide_remove === 'undefined') { %}
		<div class="col-12">

			<button class="btn btn-sm btn-outline-light text-danger">
				<i class="la la-trash la-lg"></i> Remove
			</button>

		</div>
		{% } %}

	</div>

</script>

<script id="vvveb-input-rangeinput" type="text/html">

	<div class="input-range">

		<input name="{%=key%}" type="range" min="{%=min%}" max="{%=max%}" step="{%=step%}" class="form-range" data-input-value/>
		<input name="{%=key%}" type="number" min="{%=min%}" max="{%=max%}" step="{%=step%}" class="form-control" data-input-value/>
	</div>

</script>

<script id="vvveb-input-imageinput" type="text/html">

	<div>
		<input name="{%=key%}" type="text" class="form-control"/>
		<input name="file" type="file" class="form-control"/>
	</div>

</script>

<script id="vvveb-input-imageinput-gallery" type="text/html">

	<div>
		<img id="thumb-{%=key%}" class="img-thumbnail p-0" data-target-input="#input-{%=key%}" data-target-thumb="#thumb-{%=key%}" style="cursor:pointer" src="" width="225" height="225">
		<input name="{%=key%}" type="text" class="form-control mt-1" id="input-{%=key%}"/>
		<button name="button" class="btn btn-primary btn-sm btn-icon mt-2" data-target-input="#input-{%=key%}" data-target-thumb="#thumb-{%=key%}"><i class="la la-image la-lg"></i>&ensp;Set image</button>
	</div>

</script>

<script id="vvveb-input-colorinput" type="text/html">

	<div>
		<input name="{%=key%}" type="color" {% if (typeof value !== 'undefined' && value != false) { %} value="{%=value%}" {% } %}  pattern="#[a-f0-9]{6}" class="form-control form-control-color"/>
	</div>

</script>

<script id="vvveb-input-bootstrap-color-picker-input" type="text/html">

	<div>
		<div id="cp2" class="input-group" title="Using input value">
		  <input name="{%=key%}" type="text" {% if (typeof value !== 'undefined' && value != false) { %} value="{%=value%}" {% } %}	 class="form-control"/>
		  <span class="input-group-append">
			<span class="input-group-text colorpicker-input-addon"><i></i></span>
		  </span>
		</div>
	</div>

</script>

<script id="vvveb-input-numberinput" type="text/html">
	<div>
		<input name="{%=key%}" type="number" value="{%=value%}"
			  {% if (typeof min !== 'undefined' && min != false) { %}min="{%=min%}"{% } %}
			  {% if (typeof max !== 'undefined' && max != false) { %}max="{%=max%}"{% } %}
			  {% if (typeof step !== 'undefined' && step != false) { %}step="{%=step%}"{% } %}
		class="form-control"/>
	</div>
</script>

<script id="vvveb-input-button" type="text/html">
	<div>
		<button class="btn btn-sm btn-primary">
			<i class="la  {% if (typeof icon !== 'undefined') { %} {%=icon%} {% } else { %} la-plus {% } %} la-lg"></i> {%=text%}
		</button>
	</div>
</script>

<script id="vvveb-input-cssunitinput" type="text/html">
	<div class="input-group css-unit" id="cssunit-{%=key%}">
		<input name="number" type="number"  {% if (typeof value !== 'undefined' && value != false) { %} value="{%=value%}" {% } %}
			  {% if (typeof min !== 'undefined' && min != false) { %}min="{%=min%}"{% } %}
			  {% if (typeof max !== 'undefined' && max != false) { %}max="{%=max%}"{% } %}
			  {% if (typeof step !== 'undefined' && step != false) { %}step="{%=step%}"{% } %}
		class="form-control"/>
		 <div class="input-group-append">
		<select class="form-select small-arrow" name="unit">
			<option value="em">em</option>
			<option value="rem">rem</option>
			<option value="px">px</option>
			<option value="%">%</option>
			<option value="vw">vw</option>
			<option value="vh">vh</option>
			<option value="ex">ex</option>
			<option value="ch">ch</option>
			<option value="cm">cm</option>
			<option value="mm">mm</option>
			<option value="in">in</option>
			<option value="pt">pt</option>
			<option value="auto">auto</option>
		</select>
		</div>
	</div>

</script>


<script id="vvveb-filemanager-folder" type="text/html">
	<li data-folder="{%=folder%}" class="folder">
		<label for="{%=folder%}"><span>{%=folderTitle%}</span></label> <input type="checkbox" id="{%=folder%}" />
		<ol></ol>
	</li>
</script>

<script id="vvveb-filemanager-page" type="text/html">
	<li data-url="{%=url%}" data-file="{%=file%}" data-page="{%=name%}" class="file{% if (typeof className !== 'undefined') { %} {%=className%}{% } %}">
		<label for="{%=name%}" {% if (typeof description !== 'undefined') { %} title="{%=description%}" {% } %}>
			<span>{%=title%}</span>
			<div class="file-actions">
				<button href="#" class="delete btn btn-outline-danger" title="Delete"><i class="la la-trash"></i></button>
				<button href="#" class="rename btn btn-outline-primary" title="Rename"><i class="la la-pen"></i></button>
				<button href="#" class="duplicate btn btn-outline-primary" title="Clone"><i class="la la-copy"></i></button>
			</div>
		</label> <input type="checkbox" id="{%=name%}" />
		<!-- <ol></ol> -->
	</li>
</script>

<script id="vvveb-filemanager-component" type="text/html">
	<li data-url="{%=url%}" data-component="{%=name%}" class="component">
		<a href="{%=url%}"><span>{%=title%}</span></a>
	</li>
</script>

<script id="vvveb-breadcrumb-navigaton-item" type="text/html">
	<li class="breadcrumb-item"><a href="#" {% if (typeof className !== 'undefined') { %}class="{%=className%}"{% } %}>{%=name%}</a></li>
</script>

<script id="vvveb-input-sectioninput" type="text/html">

		<label class="header" data-header="{%=key%}" for="header_{%=key%}"><span>{%=header%}</span> <div class="header-arrow"></div></label>
		<input class="header_check" type="checkbox" {% if (typeof expanded !== 'undefined' && expanded == false) { %} {% } else { %}checked="true"{% } %} id="header_{%=key%}">
		<div class="section row" data-section="{%=key%}"></div>

</script>


<script id="vvveb-property" type="text/html">

	<div class="mb-3 {% if (typeof col !== 'undefined' && col != false) { %} col-sm-{%=col%} {% } else { %}row{% } %} {% if (typeof inline !== 'undefined' && inline == true) { %}inline{% } %} " data-key="{%=key%}" {% if (typeof group !== 'undefined' && group != null) { %}data-group="{%=group%}" {% } %}>

		{% if (typeof name !== 'undefined' && name != false) { %}<label class="{% if (typeof inline === 'undefined' ) { %}col-sm-4{% } %} form-label" for="input-model">{%=name%}</label>{% } %}

		<div class="{% if (typeof inline === 'undefined') { %}col-sm-{% if (typeof name !== 'undefined' && name != false) { %}8{% } else { %}12{% } } %} input"></div>

	</div>

</script>

<script id="vvveb-input-autocompletelist" type="text/html">

	<div>
		<input name="{%=key%}" type="text" class="form-control"/>

		<div class="form-control autocomplete-list" style="min=height: 150px; overflow: auto;">
                  </div>
                  </div>

</script>

<script id="vvveb-input-tagsinput" type="text/html">

	<div>
		<div class="form-control tags-input" style="height:auto;">


				<input name="{%=key%}" type="text" class="form-control" style="border:none;min-width:60px;"/>
                  </div>
                  </div>

</script>

<script id="vvveb-input-noticeinput" type="text/html">
	<div>
		<div class="alert alert-dismissible fade show alert-{%=type%}" role="alert" style="">
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			<h6><b>{%=title%}</b></h6>

			{%=text%}
		</div>
	</div>
</script>

<script id="vvveb-section" type="text/html">
	{% var suffix = Math.floor(Math.random() * 10000); %}

	<div class="section-item" draggable="true">
		<div class="controls">
			<div class="handle"></div>
			<div class="info">
				<div class="name">{%=name%}
					<div class="type">{%=type%}</div>
				</div>
			</div>
			<div class="buttons">
				<a class="delete-btn" href="" title="Remove section"><i class="la la-trash text-danger"></i></a>
				<!--
				<a class="up-btn" href="" title="Move element up"><i class="la la-arrow-up"></i></a>
				<a class="down-btn" href="" title="Move element down"><i class="la la-arrow-down"></i></a>
				-->
				<a class="properties-btn" href="" title="Properties"><i class="la la-cog"></i></a>
		</div>
		</div>


		<input class="header_check" type="checkbox" id="section-components-{%=suffix%}">

		<label for="section-components-{%=suffix%}">
			<div class="header-arrow"></div>
		</label>

		<div class="tree">
			<ol >
				<li data-component="Products" class="file">
					<label for="idNaN" style="background-image:url(/js/vvvebjs/icons/products.svg)"><span>Products</span></label>
					<input type="checkbox" id="idNaN">
				</li>
				<li data-component="Posts" class="file">
					<label for="idNaN" style="background-image:url(/js/vvvebjs/icons/posts.svg)"><span>Posts</span></label>
					<input type="checkbox" id="idNaN">
				</li>
			</ol>
		</div>
	</div>

</script>


<!--// end templates -->


<!-- export html modal-->
<div class="modal fade" id="textarea-modal" tabindex="-1" role="dialog" aria-labelledby="textarea-modal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title text-primary"><i class="la la-lg la-save"></i> Export html</p>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <!-- span aria-hidden="true"><small><i class="la la-times"></i></small></span -->
        </button>
      </div>
      <div class="modal-body">

        <textarea rows="25" cols="150" class="form-control"></textarea>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal"><i class="la la-times"></i> Close</button>
      </div>
    </div>
  </div>
</div>

<!-- message modal-->
<div class="modal fade" id="message-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title text-primary"><i class="la la-lg la-comment"></i> VvvebJs</p>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <!-- span aria-hidden="true"><small><i class="la la-times"></i></small></span -->
        </button>
      </div>
      <div class="modal-body">
        <p>Page was successfully saved!.</p>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-primary">Ok</button> -->
        <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal"><i class="la la-times"></i> Close</button>
      </div>
    </div>
  </div>
</div>

<!-- new page modal-->
<div class="modal fade" id="new-page-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">

    <form action="save.php">

    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title text-primary fw-normal"><i class="la la-lg la-file"></i> New page</h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <!-- span aria-hidden="true"><small><i class="la la-times"></i></small></span -->
        </button>
      </div>

      <div class="modal-body text">
		<div class="mb-3 row" data-key="type">
			<label class="col-sm-3 col-form-label">
				Template
				<abbr title="The contents of this template will be used as a start for the new template">
                    <i class="la la-lg la-question-circle text-primary"></i>
				</abbr>

			</label>
			<div class="col-sm-9 input">
				<div>
					<select class="form-select" name="startTemplateUrl">
						<option value="new-page-blank-template.html">Blank Template</option>
						<option value="demo/narrow-jumbotron/index.html">Narrow jumbotron</option>
						<option value="demo/album/index.html">Album</option>
					</select>
				</div>
			</div>
		</div>

		<div class="mb-3 row" data-key="href">
			 <label class="col-sm-3 col-form-label">Page name</label>
			<div class="col-sm-9 input">
				<div>
					<input name="title" type="text" value="My page" class="form-control" placeholder="My page" required>
				</div>
			</div>
		</div>

		<div class="mb-3 row" data-key="href">
			 <label class="col-sm-3 col-form-label">File name</label>
			<div class="col-sm-9 input">
				<div>
					<input name="file" type="text" value="my-page.html" class="form-control" placeholder="my-page.html" required>
				</div>
			</div>
		</div>

		<!--
		<div class="mb-3 row" data-key="href">
			 <label class="col-sm-3 form-label">Url</label>
			<div class="col-sm-9 input">
				<div>
					<input name="url" type="text" value="my-page.html" class="form-control" placeholder="/my-page.html" required>
				</div>
			</div>
		</div>
		-->

		<div class="mb-3 row" data-key="href">
			 <label class="col-sm-3 col-form-label">Save to folder</label>
			<div class="col-sm-9 input">
				<div>
					<input name="folder" type="text" value="my-pages" class="form-control" placeholder="/" required>
				</div>
			</div>
		</div>
      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary btn-lg" type="reset" data-bs-dismiss="modal"><i class="la la-times"></i> Cancel</button>
		<button class="btn btn-primary btn-lg" type="submit"><i class="la la-check"></i> Create page</button>
      </div>
    </div>

   </form>

  </div>
</div>

<!-- save toast -->
<div class="toast-container position-fixed end-0 bottom-0 me-3 mb-3" id="top-toast">
  <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
	    <div class="toast-header text-white">
			<strong class="me-auto">Page save</strong>
			<!-- <small class="badge bg-success">status</small> -->
			<button type="button" class="btn-close text-white px-2" data-bs-dismiss="toast" aria-label="Close"></button>
		</div>
		<div class="toast-body ">
			<div class="flex-grow-1">
			  <div class="message">Elements saved!
				  <div>Template backup was saved!</div>
				  <div>Template was saved!</div>
			  </div>
			  <div><a class="btn btn-success  btn-icon btn-sm w-100 mt-2" href="">View page</a></div>
			</div>
		</div>
	</div>
</div>

<!-- jquery-->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.hotkeys.js"></script>

<!-- bootstrap-->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- builder code-->
<script src="libs/builder/builder.js"></script>
<!-- undo manager-->
<script src="libs/builder/undo.js"></script>
<!-- inputs-->
<script src="libs/builder/inputs.js"></script>


<!-- media gallery -->
<link href="libs/media/media.css" rel="stylesheet">
<script>
window.mediaPath = 'media';
Vvveb.themeBaseUrl = 'demo/landing/';
</script>
<script src="libs/media/media.js"></script>
<script src="libs/media/openverse.js"></script>
<script src="libs/builder/plugin-media.js"></script>

<!-- bootstrap colorpicker //uncomment bellow scripts to enable -->
<!--
<script src="libs/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<link href="libs/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
<script src="libs/builder/plugin-bootstrap-colorpicker.js"></script>
-->

<!-- components-->
<!-- script src="libs/builder/components-server.js"></script -->
<script src="libs/builder/plugin-google-fonts.js"></script>
<script src="libs/builder/components-common.js"></script>
<script src="libs/builder/components-html.js"></script>
<script src="libs/builder/plugin-aos.js"></script>
<script src="libs/builder/components-elements.js"></script>
<script src="libs/builder/components-bootstrap5.js"></script>
<script src="libs/builder/components-widgets.js"></script>

<!-- sections-->
<!-- <script src="demo/landing/sections/sections.js"></script> -->
<script src="libs/builder/sections-bootstrap4.js"></script>

<!-- blocks-->
<script src="libs/builder/blocks-bootstrap4.js"></script>

<!-- plugins -->

<!-- code mirror - code editor syntax highlight -->
<link href="libs/codemirror/lib/codemirror.css" rel="stylesheet"/>
<link href="libs/codemirror/theme/material.css" rel="stylesheet"/>
<script src="libs/codemirror/lib/codemirror.js"></script>
<script src="libs/codemirror/lib/xml.js"></script>
<script src="libs/codemirror/lib/formatting.js"></script>
<script src="libs/builder/plugin-codemirror.js"></script>


<!--
Tinymce plugin
Clone or copy https://github.com/tinymce/tinymce-dist to libs/tinymce-dist
-->
<!--
<script src="libs/tinymce-dist/tinymce.min.js"></script>
<script src="libs/builder/plugin-tinymce.js"></script>
-->

<!--
CKEditor plugin
Unzip the latest ckeditor release zip from https://github.com/ckeditor/ckeditor4/releases to libs/ckeditor
-->
<!--
<script src="libs/ckeditor/ckeditor.js"></script>
<script src="libs/builder/plugin-ckeditor.js"></script>
-->

<!-- jszip - download page as zip -->
<script src="libs/jszip/jszip.min.js"></script>
<script src="libs/jszip/filesaver.min.js"></script>
<script src="libs/builder/plugin-jszip.js"></script>


<!-- autocomplete plugin used by autocomplete input-->
<script src="libs/autocomplete/jquery.autocomplete.js"></script>

<script>
let renameUrl = 'save.php?action=rename';
let deleteUrl = 'save.php?action=delete';

let pages =
	[
		{name:"narrow-jumbotron", title:"Jumbotron",  url: "demo/narrow-jumbotron/index.html", file: "demo/narrow-jumbotron/index.html", assets: ['demo/narrow-jumbotron/narrow-jumbotron.css']},
		{name:"landing-page", title:"Landing page",  url: "demo/landing/index.html", file: "demo/landing/index.html", assets: ['demo/landing/css/style.css']},
		{name:"album", title:"Album",  url: "demo/album/index.html", file: "demo/album/index.html", folder:"content", assets: ['demo/album/album.css']},
		{name:"blog", title:"Blog",  url: "demo/blog/index.html", file: "demo/blog/index.html", folder:"content", assets: ['demo/blog/blog.css']},
		{name:"carousel", title:"Carousel",  url: "demo/carousel/index.html",  file: "demo/carousel/index.html", folder:"content", assets: ['demo/carousel/carousel.css']},
		{name:"offcanvas", title:"Offcanvas",  url: "demo/offcanvas/index.html", file: "demo/offcanvas/index.html", folder:"content", assets: ['demo/offcanvas/offcanvas.css','demo/offcanvas/offcanvas.js']},
		{name:"pricing", title:"Pricing",  url: "demo/pricing/index.html", file: "demo/pricing/index.html", folder:"ecommerce", assets: ['demo/pricing/pricing.css']},
		{name:"product", title:"Product",  url: "demo/product/index.html", file: "demo/product/index.html", folder:"ecommerce", assets: ['demo/product/product.css']},
		//uncomment php code below and rename file to .php extension to load saved html files in the editor or use editor.php
		/*
		<?php
		   $htmlFiles = glob('{my-pages/*.html,demo/*\/*.html, demo/*.html}',  GLOB_BRACE);
		   foreach ($htmlFiles as $file) {
			   if (in_array($file, array('new-page-blank-template.html', 'editor.html'))) continue;//skip template files
			   $pathInfo = pathinfo($file);
			   $filename = $pathInfo['filename'];
			   $folder = preg_replace('@/.+?$@', '', $pathInfo['dirname']);
			   $subfolder = preg_replace('@^.+?/@', '', $pathInfo['dirname']);
			   if ($filename == 'index' && $subfolder) {
				   $filename = $subfolder;
			   }
			   $url = $pathInfo['dirname'] . '/' . $pathInfo['basename'];
		?>
		{name:"<?php echo ucfirst($filename);?>", file:"<?php echo ucfirst($filename);?>", title:"<?php echo ucfirst($filename);?>",  url: "<?php echo $url;?>", folder:"<?php echo $folder?>"},
		<?php } ?>
		*/
	];

$(function() {

	let firstPage = Object.keys(pages)[0];
	Vvveb.Builder.init(pages[firstPage]["url"], function() {
		//load code after page is loaded here
	});

	Vvveb.Gui.init();
	Vvveb.FileManager.init();
	Vvveb.SectionList.init();
	Vvveb.Breadcrumb.init();

	Vvveb.FileManager.addPages(pages);
	Vvveb.FileManager.loadPage(pages[firstPage]["name"]);
	Vvveb.Breadcrumb.init();

	//if url has #no-right-panel set one panel demo
	if (window.location.hash.indexOf("no-right-panel") != -1) {
		Vvveb.Gui.toggleRightColumn();
	}
});
</script>
</body>
</html>