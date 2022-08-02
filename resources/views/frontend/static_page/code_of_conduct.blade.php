

@extends('frontend.layout.master')


@section('header')
    @include('frontend.layout.partials.header')
@endsection

@section('content')

    <!-- Main content Start -->
    <div class="main-content">
      <!-- Intro Courses -->
      <section class="intro-section gray-bg pt-94 pb-100 md-pt-64 md-pb-70">
        <div class="container">
          <div class="row clearfix">
            <!-- Content Column -->
            <div class="col-lg-12 md-mb-50">
              <!-- Intro Info Tabs-->
              <div class="intro-info-tabs">
                <ul
                  class="nav nav-tabs intro-tabs tabs-box"
                  id="myTab"
                  role="tablist"
                >
                  <li
                    class="nav-item tab-btns"
                    style="width: 30%; margin-right: 4%; margin-bottom: 20px"
                  >
                    <a
                      class="nav-link tab-btn active"
                      id="prod-overview-tab"
                      data-toggle="tab"
                      href="#prod-overview"
                      role="tab"
                      aria-controls="prod-overview"
                      aria-selected="true"
                      style="
                        font-size: 15px;
                        min-height: 75px;
                        padding: 25px 0px;
                        border-radius: 20px;
                      "
                      >Code of Conduct for Student</a
                    >
                  </li>
                  <li
                    class="nav-item tab-btns"
                    style="width: 30%; margin-right: 4%; margin-bottom: 20px"
                  >
                    <a
                      class="nav-link tab-btn"
                      id="prod-curriculum-tab"
                      data-toggle="tab"
                      href="#prod-curriculum"
                      role="tab"
                      aria-controls="prod-curriculum"
                      aria-selected="false"
                      style="
                        font-size: 15px;
                        min-height: 75px;
                        padding: 25px 0px;
                        border-radius: 20px;
                      "
                      >Code of Conduct for Faculty Member</a
                    >
                  </li>
                  <li
                    class="nav-item tab-btns"
                    style="width: 30%; margin-right: 10px; margin-bottom: 20px"
                  >
                    <a
                      class="nav-link tab-btn"
                      id="prod-instructor-tab"
                      data-toggle="tab"
                      href="#prod-instructor"
                      role="tab"
                      aria-controls="prod-instructor"
                      aria-selected="false"
                      style="
                        font-size: 15px;
                        min-height: 75px;
                        padding: 25px 0px;
                        border-radius: 20px;
                      "
                      >Code of Conduct for Staff</a
                    >
                  </li>
                </ul>
                <div class="tab-content tabs-content" id="myTabContent">
                  <div
                    class="tab-pane tab fade show active"
                    id="prod-overview"
                    role="tabpanel"
                    aria-labelledby="prod-overview-tab"
                  >
                    <div class="content white-bg">
                      <!-- Cource Overview -->
                      <div class="course-overview">
                        <div
                          class="rs-testimonial style2 pt-10 pb-10 md-pt-10 md-pb-10"
                        >
                          <div class="container">
                            <div class="row">
                              <div class="col-lg-12 md-mb-30">
                                <div
                                  class="donation-part"
                                  style="
                                    background-image: url('assets/images/counter/bg3.png');
                                    padding: 15px;
                                  "
                                >
                                  <!--<h3 class="title">Statute 37C</h3>-->
                                  <!--<h3 class="title">Code of Conduct for Student</h3>-->
                                  <div class="desc mb-15">
                                    <p
                                      style="
                                        text-align: justify;
                                        color: #68533a;
                                        font-size: 16px;
                                        font-weight: 700;
                                      "
                                    >
                                    The Prime University Student Code of Conduct has been formulated with the goal of upholding standard mission of smooth disciplinary activities. It is the responsibility of the Prime University to prepare the “Students Code of Conduct” and make that available to all members to the University community so that in case of violations and subsequent convening of the “Disciplinary Committee” measures and procedures may be clear to all parties concerned. The violations of code of conduct shall invoke disciplinary process as prescribed in these rules. Sanction will be commensurate with the seriousness of the offence and may include suspension or extreme, expulsion from the university. Repeated offences justify increasingly severe sanction
                                    </p>
                                  </div>
                                  <div class="inner-box">
                                    <h4>
                                      The following shall be considered as offences under this code of conduct: 
                                    </h4>
                                    <ul class="review-list">
                                      <li>
                                        	Entering the University premise without Identity Cards
                                      </li>
                                      <li>
                                        	Smoking or taking liquors, drugs, etc. inside the University premises.
                                      </li>
                                      <li>
                                        playing cards
                                      </li>
                                      <li>
                                        	Writing, drawing or painting on any university property
                                      </li>
                                      <li>
                                        	Putting on attire that is lewd, indecent, or obscene
                                      </li>
                
                                      <li>
                                        	Cheating in the Examinations
                                      </li>
                                      <li>
                                        	Disorderly conduct, including obstructive and disruptive behaviour that interferes with teaching, research, administration, or other university or university-authorized activity
                                      </li>
                                      <li>
                                        	Failure to comply with the directions of authorized university officials in the performance of their duties, including failure to identify oneself when requested to do so; failure to comply with the terms of a disciplinary sanction; or refusal to vacate a university facility when directed to do so
                                      </li>
                                      <li>
                                        	Unauthorized entry, use, or occupancy of university facilities 
                                      </li>
                                      <li>
                                      	Interfering with an individual’s personal safety, academic efforts, employment or participation in university-sponsored activities and causing the person to have a reasonable apprehension that such harm is about to occur; or
                                         Injuring that person, or damaging his or her property; or
                                         “Fighting words” that are spoken face-to-face as a personal insult to the listener or listeners in personally abusive language inherently likely to provoke a violent reaction by the listener or listeners to the speaker

                                      </li>
                                      <li>
                                        	Intentionally obstructing or blocking access to university facilities, property, or programs
                                      </li>
                                      <li>
                                        	Engagement, solicitation, initiation, encouragement, abetment, organization, facilitation, provocation of any sort of political activity inside and in the adjacent area of the university premises
                                      </li>
                                      <li>
                                        	Dishonest conduct including, but not limited to, false accusation of misconduct, forgery, alteration, or misuse of any university document, record, or identification; and giving to a university official information known to be false
                                      </li>
                                      <li>
                                        	Assuming another person’s identity or role through deception or without proper authorization. Communicating or acting under the guise, name, identification, e-mail address, signature, or other indications of another person or group without proper authorization or authority
                                      </li>
                                      <li>
                                        	Knowingly initiating, transmitting, filing, or circulating a false report or warning concerning an impending bombing, fire, or other emergency or catastrophe or transmitting such a report to an official or an official agency
                                      </li>
                                      <li>
                                        	Unauthorized release or use of any university access codes for computer systems, duplicating systems, and other university equipment
                                      </li>

                                      
                                      <li>
                                        	Actions that endanger one’s self, others in the university community, or the academic process
                                      </li>
                                      
                                      <li>
                                        Unauthorized taking, possession, or use of university property or services or the property or services of others
                                      </li>
                                      <li>
                                        	Damage or destruction of university property or the property belonging to others
                                      </li>
                                      <li>
                                        	Unauthorized setting of fires on university property; unauthorized use of or interference with fire equipment and emergency personnel working on such occasions 
                                      </li>
                                      <li>
                                        	Unauthorized possession, use, manufacture, distribution, or sale of illegal fireworks, incendiary devices, weapon or other dangerous explosives, drugs
                                      </li>
                                      <li>
                                        	Acting with violence
                                      </li>
                                      <li>
                                        	Aiding, encouraging, or participating in a riot;
                                      </li>
                                      <li>
                                        	Harassment
                                      </li>
                                      <h3>
                                        	Stalking or hazing of any kind whether the behaviour is carried out verbally, physically, electronically, or in written form 
                                      </h3>
                                      <li>
                                        	Stalking is defined as repeated, unwanted contact in the forms of, including but not limited to, phone calls, e-mail, physical presence, and regular mail
                                      </li>
                                      <li>
                                      	Hazing is defined as any conduct that subjects another person, whether physically, mentally, emotionally, or psychologically, to anything that may endanger, abuse, degrade, or intimidate the person as a condition of association with a group or organization, regardless of the person’s consent or lack of consent.
                                      </li>
                                      <h3>
                                        	Physical abuse of any person, including the following: 
                                      </h3>
                                      <li>
                                        	the use of physical force or violence to restrict the freedom of action or movement of another person or to endanger the health or safety of another person;
                                      </li>
                                      <li>
                                        	physical behaviour that involves an express or implied threat to interfere with an individual’s personal safety, academic efforts, employment, or participation in university-sponsored extracurricular activities or causes the person to have a reasonable apprehension that such harm is about to occur; 
                                      </li>
                                      <li>
                                        physical behaviour that has the purpose or reasonably foreseeable effect of interfering with an individual’s personal safety, academic efforts, employment, or participation in university-sponsored extracurricular activities or causes the person to have a reasonable apprehension that such harm is about to occur;
                                      </li>
                                      <li>
                                        	sexual assault, including while any party involved is in an impaired state;
                                      </li>
                                      <li>
                                        	sexual contact with another person, including while any party involved is in an impaired state.
                                      </li>
                                    </ul>
                                    
                                      <h4>Gambling or any other game or any other activity with the element of betting</h4>

                                      <h4>Violation of other disseminated university regulations, policies, or rules</h4>	

                                      <h4>	A violation of any criminal law</h4>

                                      <h4>	Engaging in or encouraging any behaviour or activity that threatens or intimidates any potential participant in a judicial process</h4>

                                      <h4>	Possession and distribution of unauthorized printed materials inimical to public interest.</h4>

                                      <h4>	Membership in political subversive organization</h4>
 
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="tab-pane fade"
                    id="prod-curriculum"
                    role="tabpanel"
                    aria-labelledby="prod-curriculum-tab"
                  >
                    <div class="content white-bg">
                      <!-- Cource Overview -->
                      <div class="course-overview">
                        <div
                          class="rs-testimonial style2 pt-10 pb-10 md-pt-10 md-pb-10"
                        >
                          <div class="container">
                            <div class="row">
                              <div class="col-lg-12 md-mb-30">
                                <div
                                  class="donation-part"
                                  style="
                                    background-image: url('assets/images/counter/bg1.png');
                                    padding: 15px;
                                  "
                                >
                                  <!--<h3 class="title">Statute 37A</h3>-->
                                  <div class="desc mb-15">
                                    <p
                                      style="
                                        text-align: justify;
                                        color: #68533a;
                                        font-size: 16px;
                                        font-weight: 700;
                                      "
                                    >
                                      It is the responsibility of every faculty
                                      member to advance and disseminate
                                      knowledge through his/her professional
                                      activities. A faculty member should always
                                      try to give his/her best to the students
                                      and to the university. A faculty member
                                      should always adhere to honest dealing and
                                      fair play. A faculty member in good
                                      conscience should have the freedom of
                                      expression of opinion.
                                    </p>
                                  </div>
                                  <div class="inner-box">
                                    <h4>
                                      The following lapses shall constitute
                                      misconduct on the part of a faculty
                                      member:
                                    </h4>
                                    <ul class="review-list">
                                      <li>
                                        Willful failure to perform the academic
                                        duties assigned to him/her in accordance
                                        with the Act, Statutes and Ordinances.
                                      </li>
                                      <li>
                                        Victimization of and discrimination
                                        against students, colleagues and other
                                        staff.
                                      </li>
                                      <li>
                                        Inciting of student(s) against other
                                        student(s), colleague(s), the University
                                        administration and its employee(s). A
                                        faculty member, however, shall have the
                                        right to express his/her opinion and
                                        ventilate differences on matters of
                                        principle in meetings, seminars or
                                        formal assemblies of students.
                                      </li>
                                      <li>
                                        Raising question of caste, creed,
                                        religion, race or sex in his/her
                                        relationship with students, colleagues
                                        and other staff.
                                      </li>
                                      <li>
                                        Refusal to carry out the decisions of
                                        competent authorities/bodies and
                                        officers of the University in due
                                        exercise of their functions, made in
                                        accordance with the Act, Statutes and
                                        Ordinances. A faculty member shall,
                                        however, have the right to express
                                        his/her difference with the policies and
                                        decisions of the authorities and
                                        officers of the
                                        University.Notwithstanding anything
                                        herein before contained, bona fide
                                        criticism or expression of opinion by
                                        any faculty member shall not constitute
                                        misconduct.
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="inner-box">
                                    <h4>
                                      The following acts shall constitute breach
                                      of Code of Conduct:
                                    </h4>
                                    <ul class="review-list">
                                      <li>
                                        Knowingly or wilfully neglecting his
                                        duties;
                                      </li>
                                      <li>
                                        Propagating through his teaching lessons
                                        or otherwise, communal or sectarian
                                        outlook, or inciting or allowing any
                                        student to indulge in communal or
                                        sectarian activities;
                                      </li>
                                      <li>
                                        Discriminating against any student on
                                        the ground of caste, creed, language,
                                        place of origin, social and cultural
                                        background, or any of them;
                                      </li>
                                      <li>
                                        Indulging or encouraging any form of
                                        malpractice connected with examinations
                                        or any other university activity;
                                      </li>
                                      <li>
                                        While being present in the University
                                        absenting himself/herself (except with
                                        the previous permission of the proper
                                        authority) from classes which he/she is
                                        required to attend.
                                      </li>
                                      <li>
                                        Remaining absent from the University
                                        without leave or without the previous
                                        permission of the authority. Provided
                                        that where such absence without leave or
                                        without the previous permission is due
                                        to reasons beyond the control of the
                                        faculty member concerned, it shall not
                                        be deemed to be a breach of the Code of
                                        Conduct if, on return to duty, the
                                        faculty member has applied for and
                                        obtained, ex-post facto, the necessary
                                        sanction for the leave.
                                      </li>
                                      <li>
                                        Accepting any job of a remunerative
                                        character from any source other than the
                                        university or giving private tuition to
                                        any student or other person or engaging
                                        himself in any business.
                                      </li>
                                      <li>
                                        Engaging himself as a selling agent or
                                        canvasser for any publishing firm or
                                        trader.
                                      </li>
                                      <li>
                                        Asking for or accepting any contribution
                                        or otherwise associating himself with
                                        the raising of any fund or making any
                                        other collections, whether in cash or in
                                        kind, in pursuance of any object
                                        whatsoever, except subscription from the
                                        members of any association of faculty
                                        members.
                                      </li>
                                      <li>
                                        Entering into any monetary transaction
                                        with any student or his parent/guardian;
                                        exploiting his influence for personal
                                        ends; or conducting his personal matters
                                        in such a manner that he has to incur a
                                        debt beyond his means to repay; and
                                      </li>
                                      <li>
                                        Accepting or permitting any member of
                                        his family or any other person acting on
                                        his behalf to accept any gift from any
                                        student or his parent/guardian or any
                                        person with whom he has come into
                                        contract by virtue of his position in
                                        the university.
                                      </li>

                                      <h3>explanation</h3>
                                      <li>
                                        The expression “gift” shall include free
                                        transport, boarding, lodging or other
                                        service or any other pecuniary advantage
                                        provided by any person other than a near
                                        relation or personal friend having no
                                        dealings with him in connection with the
                                        university.
                                      </li>
                                      <h6>note:</h6>
                                      <span
                                        >A casual meal, lift or other social
                                        hospitality of a casual nature shall not
                                        be considered a “gift”.
                                      </span>
                                      <li>
                                        On occasions, such as weddings,
                                        anniversaries, funerals or religious
                                        functions when the making of a gift is
                                        in conformity with the prevailing
                                        religious or social practices, a faculty
                                        member may accept a gift.
                                      </li>
                                      <li>
                                        Practicing or inciting any student to
                                        practice casteism, communalism or
                                        untouchability;
                                      </li>
                                      <li>
                                        Causing or inciting any other person to
                                        cause any damage to the university
                                        property;
                                      </li>
                                      <li>
                                        Behaving or encouraging or inciting a
                                        student, faculty member or an employee
                                        to behave in a rowdy or disorderly
                                        manner in the university premises;
                                      </li>
                                      <li>
                                        Committing or inciting an act of
                                        violence, or any act which involves
                                        moral turpitude;
                                      </li>
                                      <li>
                                        Organizing or attending any meeting
                                        during the working hours except where he
                                        is required or permitted by the
                                        authority to do so;
                                      </li>
                                      <li>
                                        *Not punching attendance machine on time
                                        at the arrival in the university premise
                                        and on the departure from the university
                                        campus;
                                      </li>
                                      <li>
                                        * Not devoting the requisite number of
                                        teaching hours as assigned according to
                                        the teaching load;
                                      </li>
                                      <li>
                                        *Using abusive language, quarrelling or
                                        displaying riotous behaviour;
                                      </li>
                                      <li>
                                        * Committing acts of insubordination and
                                        defiance to lawful orders;
                                      </li>
                                      <li>
                                        * Making false accusations against a
                                        person, whether after being provoked or
                                        otherwise;
                                      </li>
                                      <li>
                                        * Misappropriating university property,
                                        or committing acts of theft, fraud or
                                        embezzlement of funds;
                                      </li>
                                      <li>
                                        * Obstructing employees of the
                                        university staff from performing their
                                        lawful duties and indulging in any sort
                                        of agitation to coerce or embarrass
                                        university authorities and staff;
                                      </li>
                                      <li>
                                        * Divulging confidential matters
                                        relating to the university;
                                      </li>
                                      <li>
                                        * Possessing weapons, explosives or any
                                        other objectionable material in
                                        university premises; and
                                      </li>
                                      <li>
                                        * Engaging in any activity that is not
                                        in conformity with the character and
                                        traditions of the Prime University.
                                      </li>
                                    </ul>
                                    <ul class="review-list">
                                      <h4>Every faculty member shall</h4>
                                      <li>
                                        be punctual in attendance and in respect
                                        of his class-work and also for any other
                                        work connected with the duties assigned
                                        to him and
                                      </li>
                                      <li>
                                        abide by the rules and regulations of
                                        the university and also show due respect
                                        to the constituted authorities.
                                      </li>
                                    </ul>
                                    <ul class="review-list">
                                      <h4>
                                        Nothing contained in Rules (1) & (2)
                                        above shall be deemed to take away or
                                        curtail the rights of a faculty member:
                                      </h4>
                                      <li>
                                        to appear at any examination to improve
                                        his qualifications on permission from
                                        the relevant authority;
                                      </li>
                                      <li>
                                        to become, or to continue to be, a
                                        member of any literary, scientific or
                                        professional organization; and
                                      </li>
                                      <li>
                                        to make any representation for the
                                        redress of any bona fide grievance,
                                        subject to the condition that such
                                        representation is not made in any rude
                                        or unbecoming language.
                                      </li>
                                    </ul>

                                    <ul class="review-list">
                                      <h4>
                                        Breach of any condition specified in
                                        Rules (1) and (2) shall be deemed to be
                                        a breach of the Code of Conduct. :
                                      </h4>
                                      <li>
                                        *All the faculty members are expected to
                                        be exemplary in their public and private
                                        lives. Their loyalty, sense of
                                        dedication and integrity of character at
                                        all-time should be an inspiration to
                                        their students. The faculty members
                                        shall attend to their duties with care
                                        and commitment, be punctual in
                                        attendance and dutiful in respect of
                                        classes and also for any other work
                                        connected with the duties assigned to
                                        them by the authority. They shall abide
                                        by the rules and regulations of the
                                        university and carry out the lawful
                                        orders and also show due respect to the
                                        constituted authorities.
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="tab-pane fade"
                    id="prod-instructor"
                    role="tabpanel"
                    aria-labelledby="prod-instructor-tab"
                  >
                    <div class="content white-bg">
                      <!-- Cource Overview -->
                      <div class="course-overview">
                        <div
                          class="rs-testimonial style2 pt-10 pb-10 md-pt-10 md-pb-10"
                        >
                          <div class="container">
                            <div class="row">
                              <div class="col-lg-12 md-mb-30">
                                <div
                                  class="donation-part"
                                  style="
                                    background-image: url('assets/images/counter/bg2.png');
                                    padding: 15px;
                                  "
                                >
                                  <!--<h3 class="title">Statute 37B</h3>-->
                                  <!--<h4>Code of Conduct for Executives & Staff</h4>-->
                                  <div class="desc mb-15">
                                    <p
                                      style="
                                        text-align: justify;
                                        color: #68533a;
                                        font-size: 16px;
                                        font-weight: 700;
                                      "
                                    >
                                    The general conduct and behaviour of the Prime University employees in carrying out their work is an important yardstick by which the performance, honesty, integrity, and impartiality of the Prime University is judged and public trust maintained. It is important therefore that our core values underpin the day to day activities of the University. 
                                    </p>
                                  </div>
                                  <div class="inner-box">
                                    <h4>
                                      	The employees of the Prime University should abide by this Code and must maintain the highest standards of integrity by: 
                                    </h4>
                                    <ul class="review-list">
                                      <li>
                                      		ensuring that their conduct does not bring the integrity of their position or the University into disrepute; 
                                      </li>
                                      <li>
                                        	not using their position or the resources of the University for personal gain for the benefit of persons / organizations unconnected with the Prime University or for the benefit of competitors; and 
                                      </li>
                                      <li>
                                        	Avoiding conflicts of interest. 
                                      </li>
                                      <li>
                                      	acting in a way that enhances public trust and confidence; 
                                      </li>
                                
                                    </ul>
                                  </div>
                                  <div class="inner-box">
                                    <h4>
                                    	The employees of the Prime University must be punctual in attending office or any other kind of duties assigned to them. An employee shall be treated unpunctual if he/she:
                                    </h4>
                                    <ul class="review-list">
                                      <li>
                                        	remain absent from duty without permission;
                                      </li>
                                      <li>
                                        	show negligence or indifference in discharging duties; and
                                      </li>
                                      <li>
                                      	overstaying the leave without intimation.
                                      </li>

                                      <h4>The employees of the Prime University should maintain public confidence in performing their work by: </h4>

                                      <li>
                                        	discharging their duties with diligence, efficiency and courtesy; 
                                      </li>
                                      <li>
                                        making impartial decisions based on examination of facts, merits and law relating to each matter; 
                                      </li>
                                      <li>
                                        	serving the University conscientiously, honestly and impartially; and 
                                      </li>
                                      <li>
                                        	conforming to the highest standards of public service ethics in the performance of their duties. 
                                      </li>

                                      <h4>	The following activities of the employees of the Prime University shall be considered as misconduct:</h4>
                                      <li>
                                        	Showing insubordination alone or in combination with others, to any lawful or reasonable order of the competent authority
                                      <li>
                                        	Unauthorized use of University property
                                      </li>
                                      <li>
                                        Causing wilful loss to University property 
                                      </li>
                                      <li>
                                        	Misappropriation of fund of the University
                                      </li>

                                      <li>
                                        	Any activity which creates indiscipline or moral degradation
                                      </li>
                                     
                                      <li>
                                        	Involvement in any other activity which is considered to be detrimental to the interest of the University
                                      </li>
                                      <li>
                                        	Soliciting gifts directly or indirectly 
                                      </li>

                                      <h5>	Every care must be taken by employees to ensure that any acceptance of hospitality from outside organizations or persons does not influence them, and could not reasonably be seen to influence them, in discharging their functions. </h5>

                                      <h4>	All employees must: </h4>
                                      <li>
                                        	show reasonable care for University property, resources, and funds and not use them, or permit their use, for unauthorized or non-official purposes; 
                                      </li>
                                      <li>
                                        	incur no liability on the part of the Prime University without proper authorization; and 
                                      </li>
                                      <li>
                                      	observe in full and at all times the rules governing the making of claims and payments of any kind to them, whether of salary, overtime, allowances including travel and subsistence. 
                                      </li>

                                      <h5>	Employees must devote their full attention and energy to official duties during working hours. Employees are obliged to attend at work as required and not to absent themselves from duty without authorization. </h5>

                                      <h5>	Employees shall not engage in any gainful occupation, other than as an employee of the University that might impair the performance of his / her duties, conflict with the interests of the University or be inconsistent with the discharge of his / her duties as an employee of the University. </h5>

                                      <h5>	Employees shall follow the principles of respect for others, collegiality, equality, a responsibility to maintain a courteous, efficient and impartial workplace and a duty to uphold the law. </h5>

                                      <h5>	Employees shall carry out such duties as are assigned to them from time to time in relation to their employment and such assignments as are related to the performance of such duties as provided for in their general terms and conditions of employment. </h5>

                                      <h5>	In dealing with students and the public, employees must treat individuals equally, with courtesy and in an impartial fashion. </h5>

                                      <h5>	Employees must also show due respect for their colleagues at work and should bring positive working atmosphere. </h5>

                                      <h5>	Information provided by an employee in his or her written application and at the interview must be correct in every respect. Where this is found not to be the case, the University reserves the right to initiate the disciplinary procedures which may result in dismissal, or take such other action as it considers appropriate in the circumstances. The University reserves the right to require employees to provide evidence of academic and / or other qualifications at any time. </h5>

                                      <h5>	An employee who is charged or convicted of an indictable criminal offence must report that fact to the registrar of the university. If such information necessitates an investigation, it will be conducted in accordance with the principles of fair procedures and natural justice. 
                                        This Code applies to all employees whether full-time or employed on an atypical basis (e.g. temporary, part-time or fixed-term contract etc.). It also applies where relevant to employees on different forms of leave. Breaches of the Code may result in the Disciplinary Procedure which may result in dismissal. 
                                        </h5>
                                     
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End intro Courses -->

      <!-- Newsletter section start -->
      <div class="rs-newsletter style1 mb--124 sm-mb-0 sm-pb-70">
        <div class="container">
          <div class="newsletter-wrap">
            @foreach($home_addr as $home_addrs)
            <div class="row y-middle">
              <div class="col-md-4 sm-mb-30">
                <div class="sec-title">
                  <div class="sub-title white-color">Address</div>
                  <p class="title mb-0 white-color">
                    {!! $home_addrs->address !!}
                  </p>
                </div>
              </div>
              <div class="col-md-4 border-left">
                <div class="sec-title">
                  <div class="sub-title white-color">Phone Number</div>
                  <p class="title mb-0 white-color">
                    {!! $home_addrs->phone_number !!}
                  </p>
                </div>
              </div>
              <div class="col-md-4 border-left">
                <div class="sec-title">
                  <div class="sub-title white-color">Email</div>
                  <p class="title mb-0 white-color">
                    {!! $home_addrs->email !!}
                  </p>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        <!-- Newsletter section end -->
      </div>
      <!-- Section bg Wrap 2 End -->
    </div>
    <!-- Main content End -->

@endsection
