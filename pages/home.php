<?php
//die(var_dump($_REQUEST));
require_once '../users/init.php';

require_once $abs_us_root.$us_url_root.'users/includes/header_not_closed.php';
?>

<?php require_once 'includes/postit_pre.php'; // postit css linking ?>
<style xmlns="http://www.w3.org/1999/html">
    .put-page-only-styles-here {
        /* for styles for the entire site put in users/css/custom.css */
    }

    a.solution-name {
        cursor: pointer;
        font-weight: bold;
        font-size: 1.5em;
    }

    div.solution {
        display: none;
    }


    blockquote{
        display:block;
        background: #fff;
        padding: 15px 20px 15px 45px;
        margin: 0 0 20px;
        position: relative;

        /*Font*/
        font-family: Georgia, serif;
        font-size: 16px;
        line-height: 1.2;
        color: #666;
        text-align: justify;

        /*Borders - (Optional)*/
        border-left: 15px solid #c76c0c;
        border-right: 2px solid #c76c0c;

        /*Box Shadow - (Optional)*/
        -moz-box-shadow: 2px 2px 15px #ccc;
        -webkit-box-shadow: 2px 2px 15px #ccc;
        box-shadow: 2px 2px 15px #ccc;
    }

    blockquote::before{
        content: "\201C"; /*Unicode for Left Double Quote*/

        /*Font*/
        font-family: Georgia, serif;
        font-size: 60px;
        font-weight: bold;
        color: #999;

        /*Positioning*/
        position: absolute;
        left: 10px;
        top:5px;
    }

    blockquote::after{
        /*Reset to make sure*/
        content: "";
    }

    blockquote a{
        text-decoration: none;
        background: #eee;
        cursor: pointer;
        padding: 0 3px;
        color: #c76c0c;
    }

    blockquote a:hover{
        color: #666;
    }

    blockquote em{
        font-style: italic;
        color: #c76c0c;
    }

    div.the-solutions h1 {
        font-style: italic;
    }

</style>

</head>

<body>
<?php
require_once $abs_us_root.$us_url_root.'users/includes/navigation.php';




if (!securePage($_SERVER['PHP_SELF'])){die('Need to be logged in and have a User role to see this page');}
if ($settings->site_offline==1){die("The site is currently offline.");}

?>

<div id="page-wrapper" style="">
    <div class="container-fluid">
        <!-- Content Starts Here -->
        <!-- For css classes add above around line 9 -->
        <!-- For javascript add stuff below where it says per-page-javascript -->
        <!-- Jquery is already loaded into this page, if you need it -->

            <!-- Page Heading -->


            <div class="row">
                <!-- Dont need to have to use bootstrap classes either
                just put everything in the container fluid div
                 you can delete the row class if you want
                 -->

                <div class="col-md-offset-1 col-md-4">
                    <h1>End to End Solutions</h1>
                    <div class="panel panel-default">
                        <!-- Default panel contents -->
                        <div class="panel-heading">Our Services</div>
                        <div class="panel-body">

                            <div class="list-group">

                                <a  class="list-group-item solution-name" data-about="internet" >Internet Services</a>
                                <a href="#" class="list-group-item solution-name" data-about="network" >Network Services </a>
                                <a href="#" class="list-group-item solution-name" data-about="communications" >Unified Communications </a>
                                <a href="#" class="list-group-item solution-name" data-about="voice" >Voice Over IP</a>
                                <a href="#" class="list-group-item solution-name" data-about="security" >Cybersecurity </a>
                                <a href="#" class="list-group-item solution-name" data-about="cloud" >Cloud Services </a>
                                <a href="#" class="list-group-item solution-name" data-about="mobility" >Mobility </a>
                                <a href="#" class="list-group-item solution-name" data-about="auditing" >Telecom Bill Auditing & Analysis </a>



                            </div>
                        </div>
                    </div>

                    <img alt="Customized Solutions" class="img-rounded img-responsive" src="" style="display: none">
                </div>

                <div class=" col-md-7 the-solutions">
                    <div class="solution internet">
                        <h5>INTERNET SERVICES</h5>

                        <h1>Dedicated Internet Access</h1>
                        <h3>AT&T Dedicated Internet</h3>
                        <h2>AT&T Dedicated Internet: for powerful performance and productivity</h2>
                        <p>Get a dedicated, fast, symmetrical IP connection to support demanding
                            applications and keep your business connected. You can select dedicated
                            Internet with an AT&T-managed router, or provide and manage your own router,
                            and add options to enhance your business capabilities.
                            AT&T proactively monitors your Internet access around the clock and offers
                            features to help protect your critical business applications.
                        </p>
                        <img src="images/dedicated_internet.png" class="img-responsive">

                        <h2>The AT&T Dedicated Internet provides:</h2>
                        <ul>
                            <li>A dedicated port into the AT&T fault tolerant 40 Gbps IP Backbone with redundant, multiple ring design which helps deliver superior reliability and protects against a single core backbone point of failure.</li>
                            <li>Fast, symmetrical IP access speeds (1.5 Mbps – 40 Gbps) that provide consistently equal upload and download speeds for high-bandwidth data transfers, no matter how many people are using MIS.</li>
                            <li>Dual Stack provides access to an MIS port that supports both IPv4 and IPv6.</li>
                            <li>24x7x365 technical support and connection monitoring to help maximize uptime and performance.</li>
                            <li>Option to lease AT&T equipment or provide your own.</li>
                            <li>Usage-based billing plans.</li>
                            <li>Firewall protection is optionally available for customers who select MIS with AT&T Managed Router <br> (45 Mbps and lower.)</li>
                        </ul>

                        <h2>Free* Fiber Entrance Facilities (Where Applicable)</h2>
                        <p>For Ethernet managed Internet service customers, AT&T will construct an entrance facility for fiber access at eligible customer sites which can be served by an AT&T Incumbent Local Exchange Carrier.</p>
                        <span style="font-size: smaller;font-style: italic"> *Available to qualifying customers. Acceptance of Agreement terms required. </span>

                        <h2>Self-service tools</h2>
                        <p>AT&T Dedicated Internet provides a variety of powerful, self-service tools to help you maximize your business potential. Customers can obtain value added support through the AT&T BusinessDirect® Portal, where you can view your bill, submit maintenance requests, determine network utilization statistics, and more.</p>


                        <h2>AT&T Business Fiber, ABF</h2>
                        <p>With AT&T's fiber services your business will have dedicated, highly secure access to leading business technologies and blazing fast speeds.
                        Up to 1Gbps - Upload and download large files and images at speeds up to 1Gbps
                        Highly secure access - Access to the cloud, Virtual Private Network (VPN) and Voice over IP (VoIP) services
                        Upload and download in seconds - Share large files with employees and customers in other locations Video conference with suppliers, business partners and customers
                        </p>

                        <h1>What customers are saying</h1>
                        <blockquote>
                            <em>"Bottom line, we haven't even fully tapped the capacity of our new AT&T Business Fiber service and we're way ahead of where we used to be,"  </em> said Chris Wiegman, principal at GroupOne, a Sacramento based IT solutions provider. <em>"It's helped 'future proof' our business </em> by meeting ours and our customers' needs today and has us positioned to meet the evolving demands of tomorrow.
                        </blockquote>

                        <h2>Digital Subscriber Lines (DSL) and Broadband</h2>
                        <h3>Cost-effective, high-speed connectivity for your business.</h3>
                        AT&T Business DSL <br> <br>

                        <p>AT&T’s Digital Subscriber Line service (DSL) offers highly secure, high-speed, cost-effective business Internet connectivity over existing landlines – without interrupting voice services. Choose AT&T as your Broadband Internet Services Provider, and:</p>
                        <ul>
                            <li>Enjoy a single point of contact for your business’ connectivity needs</li>
                            <li>Access the Internet and your Intranet</li>
                            <li>Stream audio and video and transfer large amounts of data</li>
                            <li>Provide access to remote workers</li>
                            <li>Select speed options and configurations</li>
                        </ul>


                        <h2>Flexible options for growth with AT&T Business DSL</h2>
                        <p>Order added services a la carte or select a bundle for extra value, and stay connected to the information, content and data you need, no matter where work takes you. Consider AT&T DSL for:</p>
                        <ul>
                            <li>Broadband Internet connectivity for your office locations</li>
                            <li>Nationwide reach over the AT&T IP backbone</li>
                            <li>Global Access via the AT&T network</li>
                        </ul>



                    </div>

                    <div class="solution network">
                        <h5>NETWORK SERVICES</h5>
                        <h1>Business VPN Solutions</h1>
                        <div style="margin-left: 1em">
                            <p>AT&T VPN services let businesses, small to enterprise, send data between various locations. No matter which VPN option you choose, you can transmit your data in a highly secure fashion—to business partners, cloud providers, and remote and mobile workers.</p>

                            <p>AT&T is the market leader in VPN services. We offer a broad range of solutions to meet the most basic needs or help you comply with the most demanding requirements.</p>

                            <h1>AT&T VPN options</h1>
                            <div style="margin-left: 1em">
                            <h2>AT&T SD-WAN</h2>
                            <p>AT&T SD-WAN efficiently routes data traffic across a wide area network, choosing the access type for the best network performance.</p>
                            <p>AT&T provides an over-the-top premises-based option for businesses that want to deploy SD-WAN at all sites.</p>

                            <h3>MPLS</h3>

                            <p>Highly secure, private network solution. Connects your corporate headquarters, data centers, branch offices, small offices and mobile workers to each other, and to the applications they use. Great for latency-sensitive applications.</p>

                            <h3>Broadband VPN</h3>
                            <p>Great for light-use locations, latency-tolerant applications, and tight budgets.</p>

                            <h3>Multiservice VPN</h3>
                            <p>Combines public Wi-Fi and highly secure VPN. It does this through a single piece of hardware and an intuitive portal. That means that you can now provide Internet access while keeping your sensitive data highly secure.</p>

                            <h3>Ethernet</h3>
                            <p>Connect customers, workers, and offices with this cost-effective, high-speed network solution that can be deployed in the local Metro area, over a Wide Area, and Globally.</p>

                            <h3>AT&T NetBond</h3>
                            <p>Extend your VPN network all the way to the cloud. AT&T NetBond® “bonds” the performance and network security of your MPLS virtual private network (VPN) with the speed, agility, and power of cloud solutions.</p>

                            <h3>IPSec</h3>
                            <p>Provide exceptional protection for your data with end-to-end encryption. Create a simple, highly secure VPN connection between remote users, satellite offices or mobile employee and your network hub.</p>

                            <h3>Remote Access</h3>
                            <p>Extend the reach of your VPN with mobile access from AT&T. Provide a consistent, highly secure user experience from virtually anywhere, anytime, with almost any device.</p>

                            <h3>Virtual Network Functions (VNF)</h3>
                            AT&T FlexWare
                            <br>
                            <br>
                            <p>Imagine a network that responds to your business needs in near real-time. A network that empowers your workforce and supports your customers more effectively by being more agile and efficient. Introducing AT&T FlexWare, a solution that allows your network to be as responsive as the business it supports.</p>

                            <p>Designed and deployed on the AT&T Integrated Cloud platform that leverages Software-Defined Networking (SDN) and Network Function Virtualization (NFV) technologies, AT&T FlexWare simplifies your network infrastructure while potentially lowering capital investments. You only need a single AT&T FlexWare Device at each site to run multiple AT&T-certified virtual functions from the best-of-breed vendors (AT&T FlexWare Applications).</p>

                            <p>AT&T FlexWare is modular: you can mix and match FlexWare Devices and Applications and deploy them to your various global locations much quicker than with traditional single purpose built network equipment models.</p>

                            </div>
                        </div>

                        <h1>DWDM and SONET Ring Services</h1>
                        <div style="margin-left: 1em">
                            <p>
                                Having a network that can outsmart breaches is especially important for industries that hold or transmit private customer information. Ring architectures are known for their reliability and performance, and security is the number one value in any optical transport network. With AT&T ring services and a dedicated optical transport network, you’ll get innate private data transport and mission critical data protection. Here’s how:
                            </p>
                            <ul>
                                <li>DWDM and SONET can be deployed within a dedicated optical transport network in which the fiber and its associated hardware are provided for the exclusive use of a single customer.</li>
                                <li>If intrusion to the fiber is detected, the data is immediately switched to an alternate path while the problem is investigated.</li>
                                <li>No other business can use the same fiber components, which reduces the risk of data compromise.</li>
                                <li>DWDM and SONET ring services can carry different types of traffic at different speeds. This allows you to set different protection levels for each type of traffic, thus applying extra protection to more sensitive data.</li>
                                <li>The networks may be designed with diverse entry points to further reduce the risks of single points of failure.</li>

                            </ul>

                            <h2>DWDM and SONET ring services and disaster recovery</h2>
                            <p>In the event of a potential disruption or disaster, the self-healing technology of ring services can help keep your business running. Because AT&T ring services form a redundant network, they are an excellent option for industries that can’t afford downtime, such as financial firms, broadcasters, health care companies and government industries. AT&T DWDM and SONET ring services:</p>
                            <ul>
                                <li>Allow you to consolidate Ethernet, data, video and voice/VoIP traffic on a single, reliable platform, supported by the anchoring ring design. If traffic fails on one path, data is immediately switched to the alternate path to provide almost instant recovery from many disasters.</li>
                                <li>Provide flexible networking options to meet operational needs.</li>
                                <li>May employ battery back-up capabilities for added protection.</li>

                            </ul>
                        </div>

                        <h1>Ethernet Services</h1>
                        <div style="margin-left: 1em">
                            <h2>Manage more data and locations with higher bandwidth</h2>
                            <p>Whether you manage megabits or gigabits of data traffic, or you want to connect two sites or hundreds, AT&T business Ethernet services help you connect your network with the bandwidth you need now and as your enterprise evolves. With AT&T you can enjoy greater Ethernet coverage with service on a national and global scale.</p>
                            <h2>Benefits</h2>
                            <p>Our Ethernet services help you:</p>
                            <ul>
                                <li>Minimize unused capacity with near real-time bandwidth control with SDN enabled AT&T Network on Demand platform (where available)</li>
                                <li>Increase efficiency with the Network on Demand process for faster service deployment and configuration changes</li>
                                <li> Maximize performance for high bandwidth/low latency requirement for converged voice, data and video applications</li>

                            </ul>
                            <h2>AT&T business Ethernet services</h2>
                            <div style="margin-left: 1em">
                                <h3>AT&T Switched Ethernet Service</h3>
                                <p>Connect multiple sites together with Ethernet over copper or fiber transport to the MPLS network for all of your IP-based applications. Use the on demand software enabled technology (where available) to manage your network in near real-time, quickly order more ports for new sites, add or change services and scale bandwidth to new locations to meet your growing business needs.</p>

                                <h3>AT&T Dedicated Ethernet</h3>
                                <p>Create a 2-location connection that’s fast, dedicated and highly secure for your most demanding requirements.</p>

                                <h3>OPT-E-WAN® service</h3>
                                <p>Provides a global layer 2 Ethernet point-to-point, hub-and-spoke, or any-to-any MPLS network solution that can support voice, data, and video communications.</p>
                            </div>
                        </div>

                        <h1>AT&T Wi-Fi Services</h1>
                        <div style="margin-left: 1em">
                            <p>Enhance your business and keep your customers connected with a range of Wi-Fi solutions designed for small to large venues</p>
                            <p>Whether your business has one location or thousands, AT&T Wi-Fi services can provide the connectivity your guests, customers and employees expect. As the premier business Wi-Fi service provider for retail, hospitality, dining, sports entertainment, and airports, AT&T offers a wide range of Wi-Fi services and hotspot management offerings to meet your requirements and budget.</p>
                        </div>

                        <h1>Network Consulting</h1>
                        <div style="margin-left: 1em">
                            <p>As trusted advisors, our Network Consulting specialists offer businesses the strategic focus, engineering capabilities, and deployment experience necessary to:</p>
                            <ul>
                                <li>Connect employees, customers, and partners with business-critical applications</li>
                                <li>Optimize existing network strategy and solutions to realize cost savings</li>
                                <li>Take full advantage of new applications, industry proven solutions, as well as emerging technologies such as SDN</li>
                                <li>Strategically grow your network infrastructure to capitalize on new market opportunities</li>

                            </ul>
                            <h2>Our Network Consulting Services</h2>
                            <div style="margin-left: 1em">
                                <p>AT&T Consulting offers a strong foundation of networking expertise that spans five areas:</p>
                                <div style="margin-left: 1em">
                                    <h3>Network Strategy and Roadmap</h3>
                                    <p>Let us help you define the right technology approach to realize your business objectives, by sharing our extensive insights and experiences in strategic network transformation, emerging and industry-leading technologies, along with vendor, service delivery, and migration alternatives that best suit your unique needs.</p>

                                    <h3>Network Architecture and Engineering</h3>
                                    <p>Count on our network consulting experts to design, engineer, implement, and test your solution, before you deploy it. Our architects, as part of the AT&T family, have experience with some of the largest and most complex network designs on record. In addition, we have “reach back” into numerous organizations across AT&T including product houses and research.</p>

                                    <h3>Network Assessment </h3>
                                    <p>Get a fresh perspective on how efficiently your network is configured, how well it performs, and how to make it even better.</p>

                                    <h3>Network Readiness</h3>
                                    <p>Determine if your network is designed and engineered to support new mission-critical applications – before you deploy them. Make sure you have the operational readiness needed to support "Day 2" operations of your network infrastructure, and the right partner ecosystem as well.</p>

                                    <h3>IPv6 Life Cycle Services</h3>
                                    <p>Make a smooth transition to IPv6. Our strong foundation of experience helps us make sure your plans, budget, and enterprise network components are ready. Our experience in large scale IPv6 migrations helps you identify the right path and solution alternatives for adoption.</p>
                                </div>
                            </div>

                            <h2>Advantages of Network Consulting</h2>
                            <div style="margin-left: 1em">
                                <p>We have the depth and breadth of networking expertise to clarify your technology goals, and the resources to make them a reality. Our network consulting experts can help you:</p>
                                <ul>
                                    <li>Create a more unified, efficient network</li>
                                    <li>Align IT decisions with business objectives</li>
                                    <li>Enhance network performance, security, and availability</li>
                                    <li>Improve user adoption of new technologies and applications</li>
                                    <li>Reduce risk with a solid, strategic growth plan</li>

                                </ul>

                                <h3>Improve your network resources with confidence</h3>
                                <p>Grow smart—and strategically. We can create a solid, focused plan to help you efficiently meet your goals, while minimizing risks and unexpected costs.</p>

                                <h3>Refresh your network strategy with a new perspective</h3>
                                <p>We can provide an objective analysis of your network—from your equipment and data centers to your current LAN, WAN, and WLAN strategy—and offer a range of vendor-agnostic solutions to improve them. We’re here to evolve your business quickly, intelligently, and in the way that fits you best.</p>

                                <h3>Take advantage of solid networking expertise</h3>
                                <p>Worry less about planning for and implementing new network capabilities. As a trusted advisor, we’re well versed in emerging technologies and equipped to move your network forward—quickly and painlessly.</p>
                                <p>You may complete the <a href="contact_us.php" target="_blank">Have us Contact you form</a>   to schedule an appointment with an AT&T Consulting representative to discuss your strategic network initiatives and resource needs.</p>
                            </div>

                        </div>
                        <h1>Network Integration and Sourcing</h1>
                        <div style="margin-left: 1em">
                            <h2>Network Sourcing</h2>
                            <p>AT&T network experts can help plan, deploy and manage your IT solutions – while keeping employees and multiple locations in sync.</p>
                            <h2>Network Integration</h2>
                            <p>AT&T IT solutions include data center transformation, network transformations and optimization, global network security, telecommunications management, emerging technology and more.</p>
                        </div>

                    </div>
                    <div class="solution communications">
                        <h5>HOSTED VOICE SERVICES</h5>

                        <h1>AT&T Collaborate</h1>
                        <ul>
                            <li>Voice, Unified Communications, and Contact Center options</li>
                            <li>Conferencing, web meetings, and employee availability are unified in one application</li>
                            <li>Cloud-based telephony features such as hunt groups, auto attendant, and single voice voicemail</li>
                            <li>Mobile app for most operating systems (iOS, Android)</li>
                            <li>Available to use on virtually any device</li>
                            <li>Single number reach for both fixed and mobile users</li>
                        </ul>


                        <h1>RingCentral</h1>

                        <h2>Hosted Phone System</h2>
                        <p>Based on a robust virtual PBX and cutting-edge voice over Internet Protocol (VoIP) technology, and managed by the service provider, a cloud-based phone system lets any business take advantage of rich business phone system functionality without the complexity and cost of an on-premise system. A cloud-based business phone system uses the Internet to deliver all the features of an on-premise PBX—minus the costly setup and the bulky hardware. And since the Internet isn’t bound to a specific location, a cloud-based PBX easily integrates multiple locations and remote employees.

                        <h2>Small Business Solution</h2>
                        <p>comes with Softphone, E-FAX, Local Calling and a Toll Free Number</p>
                    </div>

                    <div class="solution voice">
                        <h5>Voice over IP</h5>
                        <h1>Voice and VoIP Communications</h1>
                        <p>Voice and data integrated into a single network, expanding the possibilities for communication. Traditional voice service and advanced features. Connect to existing phone systems</p>
                    </div>

                    <div class="solution security">
                        <h5>CYBERSECURITY</h5>
                        <p>Cybersecurity refers to an integrated multilayer solution that helps protect your critical data. Our cybersecurity products and services are powered by AT&T Threat Intellect—a proprietary combination of cutting-edge technology, experienced staff, and proven processes. Threat Intellect provides a revolutionary security experience, so you can focus on what you do best.</p>
                        <h1>Cybersecurity Consulting Services and Solutions</h1>
                        <div style="margin-left: 1em">
                            <h3>Cybersecurity Strategy and Roadmap</h3>
                            <p>Build a strategic, comprehensive, and dynamic cybersecurity roadmap with the help of skilled and experienced AT&T consultants. Help avoid costly interruptions and meet your business and security goals with in-depth guidance.</p>

                            <h3>Cybersecurity Governance, Risk, and Compliance</h3>
                            <p>GRC services from AT&T give you the insight and tools that can help bolster your security infrastructure, provide risk assessment, and help protect your valuable data while complying with security regulations.</p>

                            <h3>Payment Card Industry Solutions </h3>
                            <p>Work to meet today’s demanding payment card industry (PCI) standards to better protect your customer information and avoid PCI-related fines and penalties. We’ll help you understand the PCI DSS requirements that are relevant to your unique business.</p>

                            <h3>Highly Secure Infrastructure Services</h3>
                            <p>Help assess, plan, and design a highly secure, cost-effective network solution that is custom tailored to meet your business needs.</p>

                            <h3>Vulnerability and Threat Management</h3>
                            <p>Discover your network’s strengths and weaknesses to better safeguard your business’s most valuable assets and help to avoid threats. We can provide proven best practices and advise you on implementation for building a strong cyberdefense.</p>

                            <h3>Incident Response and Forensics</h3>
                            <p>Quickly respond and help minimize damage from a security breach with an effective, customized incident response plan. Accelerate your recovery time and be better prepared for future attacks with forensic analysis.</p>

                            <h3>Internet of Things Security Consulting</h3>
                            <p>Help protect your entire Internet of Things (IoT) ecosystem from attacks with an end-to-end security strategy. Receive guidance for highly secure deployment, management, and scalability of IoT solutions.</p>
                        </div>
                    </div>
                    <div class="solution cloud">
                        <h5>CLOUD SERVICES</h5>
                        <h3>Data Center</h3><p>Access 300+ global data centers; AT&T Network Empowers you to operate your private clouds and servers as a gateway to the public cloud.</p>
                        <h3>Cloud Disaster Recovery</h3><p>Recover your data and keep operations running after an outage.</p>
                        <h3>Hybrid Cloud Computing</h3><p>Get the best of both worlds by combining the performance, security and control of a private cloud with the flexibility of a public cloud.</p>
                        <h3>Cloud Networking</h3><p>Access your cloud with greater performance, security, and control by extending your AT&T VPN to the cloud.</p>

                        <h3>Content Delivery Network Service</h3><p>Gain the bandwidth, flexibility and control you need to deliver digital assets quickly and securely.</p>

                        <h3>Cloud Storage</h3><p>A highly reliable way to store and manage data while increasing collaboration across your enterprise virtually anytime and anywhere.</p>

                        <h3>Enterprise Mobility Management</h3><p>Take the complexity out of mobility with a suite of mobile device, application, and content management services.</p>

                        <h3>Security</h3><p>Multi-layer security solution that provides you with the tools to prevent, detect, and respond to threats.</p>

                    </div>
                    <div class="solution mobility">
                        <h5>Mobility Services</h5>
                        <h1>Mobility Services</h1>
                        <div style="margin-left: 1em">
                            <h3>Enhanced Push-to-Talk</h3><p>AT&T EPTT supports a broad portfolio of smartphones and rugged devices that make fast connections over 3G, 4G*, 4G AT&T EPTT supports a broad portfolio of smartphones and rugged devices that make fast connections over 3G, 4G*, 4G LTE and Wi-Fi networks.</p>
                            <h3>Mobile Applications for Business</h3><p>Choose from prepackaged applications or work with our developers and platforms to create custom apps that will help improve your business processes.</p>
                            <h3>Machine-to-Machine Solutions</h3><p>Full suite of connected devices and application services to power the Internet of Things (IoT).</p>
                            <h3>Mobile Messaging</h3><p>Enrich your communications and marketing campaigns with a complete set of messaging solutions for SMS, email, social media and more.</p>
                            <h3>Mobile Devices for Business</h3><p>Mobilize your business with a broad portfolio of smartphones and mobile phones backed by fast, dependable, comprehensive global network coverage.</p>
                            <h3>Workforce Management</h3><p>Optimize your mobile operations.</p>
                            <h3>Mobile Connectivity</h3><p>Create a reliable, highly secure link between remote employees and your network—so they can work and collaborate seamlessly between locations and devices.</p>
                            <h3>Field Solutions</h3><p>Empower mobile operations with advanced communication and dispatch tools. Learn about AT&T Field Solutions.</p>
                            <h3>Maximize your mobile expense management</h3><p>Empower workers to be more productive—virtually anytime, anywhere.</p>

                        </div>

                        <h1>Enterprise Mobility Management</h1>
                        <div style="margin-left: 1em">
                            <h3>Mobility Consulting</h3><p>Access the broadest range of innovative mobility expertise for your business.</p>
                            <h3>Mobile Device Management</h3><p>Increase productivity with the latest devices on our powerful LTE network.</p>
                            <h3>Mobile Application Management</h3><p>Store, manage, and share content online in a highly secure cloud.</p>
                            <h3>Digital Content Solutions</h3><p>Provide highly secure, digital workspaces and access to resources virtually anywhere.</p>
                            <h3>Mobile Application Development</h3><p>Develop and manage applications efficiently and securely across devices and platforms.</p>
                            <h3>Mobile Expense Management</h3><p>Manage costs and have greater choice of solutions for your workers’ devices.</p>
                            <h3>Managed Mobility Services</h3><p>Minimize down-time ensuring workers have access to corporate data and applications on their mobiles.</p>
                            <h3>Cloud Networking</h3><p>Access cloud resources from virtually any site using almost any wired or wireless device.</p>

                        </div>
                     </div>


                    <div class="solution auditing">
                        <h5>TELECOM BILL AUDITING & ANALYSIS</h5>
                        <h1>TELECOM BILL AUDITING & ANALYSIS</h1>
                        <p>DSTORM Consulting will do a complete analysis of your telecom bill and will recover money that is owed to your company from your Telecom Provider should we find any discrepancies with the billing. DSTORM will also recommend changes that need to be made if any and will implement any needed changes per the customer’s request.</p>
                    </div>
                </div>


            </div>



        <!-- Content Ends Here -->
    </div>


</div> <!-- /.wrapper -->


<?php require_once $abs_us_root.$us_url_root.'users/includes/page_footer.php'; // the final html footer copyright row + the external js calls ?>
<?php require_once 'includes/postit_romp.php'; // postit code linking ?>
<!-- Place any per-page javascript here -->
<script>
    function show_detail(cname) {

        $('.solution').hide();
        $('.'+ cname).show();
    }

    $(function() {
        $('.solution-name').click(function() {
            //clearInterval(intervalId);
            var c = $(this).data('about');
            show_detail(c);
            return false;
        });

        show_detail('internet')
    });
</script>


<?php require_once $abs_us_root.$us_url_root.'users/includes/html_footer.php'; // currently just the closing /body and /html ?>
