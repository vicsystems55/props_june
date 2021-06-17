@extends('layouts.dashboard')

@section('content')
<div class="ro">

  

            <div class="ro">
                <div class="col-lg-6 col-xl-6">
                    <div class="message_container">
                        <div class="inbox_user_list">
                            <div class="iu_heading">
                                <div class="candidate_revew_search_box">
                                    <form class="form-inline">
                                        <input class="form-control" type="search" placeholder="Serach" aria-label="Search">
                                        <button class="btn" type="submit"><span class="flaticon-magnifying-glass"></span></button>
                                    </form>
                                </div>
                            </div>
                            <ul>
                                <li class="contact">
                                    <a href="#">
                                        <div class="wrap">
                                            <span class="contact-status online"></span>
                                            <img class="img-fluid" src="images/team/s1.jpg" alt="s1.jpg"/>
                                            <div class="meta">
                                                <h5 class="name">Vincent Porter</h5>
                                                <p class="preview">I'm going to office.</p>
                                            </div>
                                            <div class="m_notif">2</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="contact">
                                    <a href="#">
                                        <div class="wrap">
                                            <span class="contact-status online"></span>
                                            <img class="img-fluid" src="images/team/s2.jpg" alt="s2.jpg"/>
                                            <div class="meta">
                                                <h5 class="name">Jacob Brown</h5>
                                                <p class="preview">You: Where is Alex?</p>
                                            </div>
                                            <div class="m_notif">5</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="contact">
                                    <a href="#">
                                        <div class="wrap">
                                            <span class="contact-status online"></span>
                                            <img class="img-fluid" src="images/team/s3.jpg" alt="s3.jpg"/>
                                            <div class="meta">
                                                <h5 class="name">Harry Taylor</h5>
                                                <p class="preview">I'm going to office.</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="contact">
                                    <a href="#">
                                        <div class="wrap">
                                            <span class="contact-status busy"></span>
                                            <img class="img-fluid" src="images/team/s4.jpg" alt="s4.jpg"/>
                                            <div class="meta">
                                                <h5 class="name">Sarah Miller</h5>
                                                <p class="preview">You: okay!</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="contact">
                                    <a href="#">
                                        <div class="wrap">
                                            <span class="contact-status away"></span>
                                            <img class="img-fluid" src="images/team/s5.jpg" alt="s5.jpg"/>
                                            <div class="meta">
                                                <h5 class="name">Joanne Davies</h5>
                                                <p class="preview">Let’s go!</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="contact">
                                    <a href="#">
                                        <div class="wrap">
                                            <span class="contact-status busy"></span>
                                            <img class="img-fluid" src="images/team/s6.jpg" alt="s6.jpg"/>
                                            <div class="meta">
                                                <h5 class="name">Sam Lee</h5>
                                                <p class="preview">Awesome!</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="contact">
                                    <a href="#">
                                        <div class="wrap">
                                            <span class="contact-status online"></span>
                                            <img class="img-fluid" src="images/team/s7.jpg" alt="s7.jpg"/>
                                            <div class="meta">
                                                <h5 class="name">Vincent Porter</h5>
                                                <p class="preview">I'm going to office.</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="contact">
                                    <a href="#">
                                        <div class="wrap">
                                            <span class="contact-status online"></span>
                                            <img class="img-fluid" src="images/team/s8.jpg" alt="s8.jpg"/>
                                            <div class="meta">
                                                <h5 class="name">Jacob Brown</h5>
                                                <p class="preview">You: Where is Alex?</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="contact">
                                    <a href="#">
                                        <div class="wrap">
                                            <span class="contact-status online"></span>
                                            <img class="img-fluid" src="images/team/s1.jpg" alt="s1.jpg"/>
                                            <div class="meta">
                                                <h5 class="name">Vincent Porter</h5>
                                                <p class="preview">I'm going to office.</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="contact">
                                    <a href="#">
                                        <div class="wrap">
                                            <span class="contact-status online"></span>
                                            <img class="img-fluid" src="images/team/s2.jpg" alt="s2.jpg"/>
                                            <div class="meta">
                                                <h5 class="name">Jacob Brown</h5>
                                                <p class="preview">You: Where is Alex?</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-8">
                    <div class="message_container">
                        <div class="user_heading">
                            <a href="#">
                                <div class="wrap">
                                    <span class="contact-status online"></span>
                                    <img class="img-fluid" src="images/team/s5.jpg" alt="s5.jpg"/>
                                    <div class="meta">
                                        <h5 class="name">Joanne Davies</h5>
                                        <p class="preview">was online today at 11:43</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="inbox_chatting_box">
                            <ul class="chatting_content">
                                <li class="media sent">
                                    <span class="contact-status busy"></span>
                                    <img class="img-fluid align-self-start mr-3" src="images/team/s6.jpg" alt="s6.jpg"/>
                                    <div class="media-body">
                                        <div class="date_time">Today, 10:31</div>
                                        <p>Hello, John!</p>
                                    </div>
                                </li>
                                <li class="media sent">
                                    <span class="contact-status busy"></span>
                                    <img class="img-fluid align-self-start mr-3" src="images/team/s6.jpg" alt="s6.jpg"/>
                                    <div class="media-body">
                                        <div class="date_time">Today, 10:31</div>
                                        <p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                    </div>
                                </li>
                                <li class="media reply first">
                                    <div class="media-body text-right">
                                        <div class="date_time">Today, 10:35</div>
                                        <p>Are we meeting today?</p>
                                    </div>
                                </li>
                                <li class="media reply">
                                    <div class="media-body text-right">
                                        <div class="date_time">Today, 10:35</div>
                                        <p>The project finally complete! Let's go to!</p>
                                    </div>
                                </li>
                                <li class="media sent">
                                    <span class="contact-status busy"></span>
                                    <img class="img-fluid align-self-start mr-3" src="images/team/s6.jpg" alt="s6.jpg"/>
                                    <div class="media-body">
                                        <div class="date_time">Today, 10:45</div>
                                        <p>Let's go!</p>
                                    </div>
                                </li>
                                <li class="media sent">
                                    <span class="contact-status busy"></span>
                                    <img class="img-fluid align-self-start mr-3" src="images/team/s6.jpg" alt="s6.jpg"/>
                                    <div class="media-body">
                                        <div class="date_time">Today, 10:51</div>
                                        <p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                    </div>
                                </li>
                                <li class="media sent">
                                    <span class="contact-status busy"></span>
                                    <img class="img-fluid align-self-start mr-3" src="images/team/s6.jpg" alt="s6.jpg"/>
                                    <div class="media-body">
                                        <div class="date_time">Today, 10:31</div>
                                        <p>Hello, John!</p>
                                    </div>
                                </li>
                                <li class="media sent">
                                    <span class="contact-status busy"></span>
                                    <img class="img-fluid align-self-start mr-3" src="images/team/s6.jpg" alt="s6.jpg"/>
                                    <div class="media-body">
                                        <div class="date_time">Today, 10:31</div>
                                        <p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                    </div>
                                </li>
                                <li class="media reply first">
                                    <div class="media-body text-right">
                                        <div class="date_time">Today, 10:35</div>
                                        <p>Are we meeting today?</p>
                                    </div>
                                </li>
                                <li class="media reply">
                                    <div class="media-body text-right">
                                        <div class="date_time">Today, 10:35</div>
                                        <p>The project finally complete! Let's go to!</p>
                                    </div>
                                </li>
                                <li class="media sent">
                                    <span class="contact-status busy"></span>
                                    <img class="img-fluid align-self-start mr-3" src="images/team/s6.jpg" alt="s6.jpg"/>
                                    <div class="media-body">
                                        <div class="date_time">Today, 10:45</div>
                                        <p>Let's go!</p>
                                    </div>
                                </li>
                                <li class="media sent">
                                    <span class="contact-status busy"></span>
                                    <img class="img-fluid align-self-start mr-3" src="images/team/s6.jpg" alt="s6.jpg"/>
                                    <div class="media-body">
                                        <div class="date_time">Today, 10:51</div>
                                        <p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                    </div>
                                </li>
                                <li class="media reply first">
                                    <div class="media-body text-right">
                                        <div class="date_time">Today, 10:35</div>
                                        <p>Are we meeting today?</p>
                                    </div>
                                </li>
                                <li class="media reply">
                                    <div class="media-body text-right">
                                        <div class="date_time">Today, 10:35</div>
                                        <p>The project finally complete! Let's go to!</p>
                                    </div>
                                </li>
                                <li class="media sent">
                                    <span class="contact-status busy"></span>
                                    <img class="img-fluid align-self-start mr-3" src="images/team/s6.jpg" alt="s6.jpg"/>
                                    <div class="media-body">
                                        <div class="date_time">Today, 10:45</div>
                                        <p>Let's go!</p>
                                    </div>
                                </li>
                                <li class="media sent">
                                    <span class="contact-status busy"></span>
                                    <img class="img-fluid align-self-start mr-3" src="images/team/s6.jpg" alt="s6.jpg"/>
                                    <div class="media-body">
                                        <div class="date_time">Today, 10:51</div>
                                        <p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="mi_text">
                            <div class="message_input">
                                <form class="form-inline">
                                    <input class="form-control" type="search" placeholder="Enter text here..." aria-label="Search">
                                    <button class="btn" type="submit">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




</div>

@endsection

