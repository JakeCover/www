<?php

/* /var/www/new.codeday.org/app/config/../views/sponsor.twig */
class __TwigTemplate_074a5bad90959b4bd918bf471188a55e54a4e31c4b45634f0bbdface34ddb21c extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("template.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page' => array($this, 'block_page'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Sponsor";
    }

    // line 3
    public function block_page($context, array $blocks = array())
    {
        echo "sponsor";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <main>
    <section id=\"sponsor-pitch\" class=\"content row round-corners\">
        <img src=\"/assets/img/sponsor.jpg\" id=\"sponsor-img\" alt=\"Two young students presenting their projects.\">
        <div class=\"wrapper\">
            <h3>CodeDay is a 24-hour programming event for students. This fall, CodeDay will take place in 30 cities across the US, attracting many thousands of students.</h3>
            <p>Unlike hackathons, CodeDay isn't focused on showing off to win thousands of dollars in prizes or building a hot startup. Students attend CodeDay to have fun. As a result, we attract only attendees who genuinely love technology, and they tend to be the best in their field. Many of the students who you’ve seen publish successful apps and games, succeed at large university and industry hackathons, and start companies were inspired at CodeDay. We are a non-profit working to get students excited about building tech projects. Each year we identify a select number of organizations we believe can be beneficial to our participants, and to whom we believe we can provide great value, and offer them an opportunity to partner.</p>
        </div>
    </section>

    <section id=\"sponsor-past-partners\" class=\"content row round-corners\">
        <div class=\"wrapper\">
            <h2 class=\"section-title\">Selected Past Sponsors</h2>
            <hr class=\"separator\">
            <div class=\"column medium-6 sponsor-wrap-google\">
                <img src=\"/assets/img/google-logo.png\" alt=\"Google logo\" id=\"sponsor-google\">
                <p>TODO</p>
            </div>
            <div class=\"column medium-6 sponsor-wrap-amazon\">
                <img src=\"/assets/img/amazon-logo.png\" alt=\"Amazon Web Services logo\" id=\"sponsor-amazon\">
                <p>A year-long global sponsorship of CodeDay helped Amazon Web Services expand its reach into the student market.</p>
            </div>
        </div>
    </section>

    <section id=\"sponsor-global\" class=\"content row round-corners\">
    <div class=\"wrapper\">
    <h2 class=\"section-title\">Per-event Sponsorships</h2>
    <hr class=\"separator\">
    <p>The sponsorships listed are presented per-event, e.g. for CodeDay Seattle Spring 2014. If
        you are interested in sponsoring multiple events or sponsoring year-round, please contact us.</p>

    <div id=\"sponsor-table\" class=\"text-center hide-for-small\">
        <div class=\"clearfix\">
            <div class=\"column no-padding sponsor-stage-column ghost\">
                .
            </div>
            <div class=\"column no-padding\">
                <h3 class=\"sponsor-table-type\">Community</h3>
                <p class=\"sponsor-table-price\">\$500</p>
            </div>
            <div class=\"column no-padding\">
                <h3 class=\"sponsor-table-type\">Startup</h3>
                <p class=\"sponsor-table-price\">\$1,000</p>
            </div>
            <div class=\"column no-padding\">
                <h3 class=\"sponsor-table-type\">API</h3>
                <p class=\"sponsor-table-price\">\$2,000</p>
            </div>
            <div class=\"column no-padding\">
                <h3 class=\"sponsor-table-type\">Recruiting</h3>
                <p class=\"sponsor-table-price\">\$2,000</p>
            </div>
            <div class=\"column no-padding\">
                <h3 class=\"sponsor-table-type\">Corporate</h3>
                <p class=\"sponsor-table-price\">\$5,000</p>
            </div>
        </div>

        <div id=\"sponsor-stage-advertising\" class=\"sponsor-stage clearfix\">
            <div class=\"column no-padding sponsor-stage-column\">
                <h2 id=\"sponsor-label-advertising\" class=\"sponsor-table-stage\">Advertising</h2>
            </div>
            <div class=\"column no-padding sponsor-type-community\">
                <ul class=\"sponsor-table-advertising\">
                    <li class=\"sponsor-table-feature\">Logo on website</li>
                    <li class=\"sponsor-table-feature\">Set up a banner</li>
                    <li class=\"sponsor-table-feature\">Hand out swag</li>
                </ul>
            </div>
            <div class=\"column no-padding sponsor-type-startup\">
                <ul class=\"sponsor-table-advertising\">
                    <li class=\"sponsor-table-feature\">&#43;</li>
                    <li class=\"sponsor-table-feature\">&#43;</li>
                    <li class=\"sponsor-table-feature\">&#43;</li>
                </ul>
            </div>
            <div class=\"column no-padding sponsor-type-api\">
                <ul class=\"sponsor-table-advertising\">
                    <li class=\"sponsor-table-feature\">&#43;</li>
                    <li class=\"sponsor-table-feature\">&#43;</li>
                    <li class=\"sponsor-table-feature\">&#43;</li>
                </ul>
            </div>
            <div class=\"column no-padding sponsor-type-recruiting\">
                <ul class=\"sponsor-table-advertising\">
                    <li class=\"sponsor-table-feature\">&#43;</li>
                    <li class=\"sponsor-table-feature\">&#43;</li>
                    <li class=\"sponsor-table-feature\">&#43;</li>
                    <li class=\"sponsor-table-feature\">Host activity</li>
                </ul>
            </div>
            <div class=\"column no-padding sponsor-type-corporate\">
                <ul class=\"sponsor-table-advertising\">
                    <li class=\"sponsor-table-feature\">&#43;</li>
                    <li class=\"sponsor-table-feature\">&#43;</li>
                    <li class=\"sponsor-table-feature\">&#43;</li>
                    <li class=\"sponsor-table-feature\">&#43;</li>
                </ul>
            </div>
        </div>

        <div id=\"sponsor-stage-stage-time\" class=\"sponsor-stage clearfix\">
            <div class=\"column no-padding sponsor-stage-column\">
                <h2 id=\"sponsor-label-stage-time\" class=\"sponsor-table-stage\">Stage Time</h2>
            </div>
            <div class=\"column no-padding sponsor-type-community\">
                <ul class=\"sponsor-table-stage-time\">
                    <li class=\"sponsor-table-feature\">Thanked during kickoff</li>
                </ul>
            </div>
            <div class=\"column no-padding sponsor-type-startup\">
                <ul class=\"sponsor-table-stage-time\">
                    <li class=\"sponsor-table-feature\">&#43;</li>
                    <li class=\"sponsor-table-feature\">1 Minute kickoff speech</li>
                </ul>
            </div>
            <div class=\"column no-padding sponsor-type-api\">
                <ul class=\"sponsor-table-stage-time\">
                    <li class=\"sponsor-table-feature\">&#43;</li>
                    <li class=\"sponsor-table-feature\">&#43;</li>
                    <li class=\"sponsor-table-feature\">Branded prize *</li>
                </ul>
            </div>
            <div class=\"column no-padding sponsor-type-recruiting\">
                <ul class=\"sponsor-table-stage-time\">
                    <li class=\"sponsor-table-feature\">&#43;</li>
                    <li class=\"sponsor-table-feature\">5 Minute kickoff speech</li>
                </ul>
            </div>
            <div class=\"column no-padding sponsor-type-corporate\">
                <ul class=\"sponsor-table-stage-time\">
                    <li class=\"sponsor-table-feature\">&#43;</li>
                    <li class=\"sponsor-table-feature\">&#43;</li>
                    <li class=\"sponsor-table-feature\">&#43; *</li>
                </ul>
            </div>
        </div>

        <div id=\"sponsor-stage-evangelism\" class=\"sponsor-stage clearfix\">
            <div class=\"column no-padding sponsor-stage-column\">
                <h2 id=\"sponsor-label-evangelism\" class=\"sponsor-table-stage\">Evangelism</h2>
            </div>
            <div class=\"column no-padding sponsor-type-community\">
                <ul class=\"sponsor-table-evangelism\">
                    <li class=\"sponsor-table-feature\">Bring mentors</li>
                </ul>
            </div>
            <div class=\"column no-padding sponsor-type-startup\">
                <ul class=\"sponsor-table-evangelism\">
                    <li class=\"sponsor-table-feature\">&#43;</li>
                </ul>
            </div>
            <div class=\"column no-padding sponsor-type-api\">
                <ul class=\"sponsor-table-evangelism\">
                    <li class=\"sponsor-table-feature\">&#43;</li>
                    <li class=\"sponsor-table-feature\">60 Minute workshop</li>
                </ul>
            </div>
            <div class=\"column no-padding sponsor-type-recruiting\">
                <ul class=\"sponsor-table-evangelism\">
                    <li class=\"sponsor-table-feature\">&#43;</li>
                </ul>
            </div>
            <div class=\"column no-padding sponsor-type-corporate\">
                <ul class=\"sponsor-table-evangelism\">
                    <li class=\"sponsor-table-feature\">&#43;</li>
                    <li class=\"sponsor-table-feature\">&#43;</li>
                </ul>
            </div>
        </div>

        <div id=\"sponsor-stage-recruiting\" class=\"sponsor-stage clearfix\">
            <div class=\"column no-padding sponsor-stage-column\">
                <h2 id=\"sponsor-label-recruiting\" class=\"sponsor-table-stage\">Recruiting</h2>
            </div>
            <div class=\"column no-padding sponsor-type-community\">
                <ul class=\"sponsor-table-recruiting\">
                    <li class=\"sponsor-table-feature ghost\"></li>
                </ul>
            </div>
            <div class=\"column no-padding sponsor-type-startup\">
                <ul class=\"sponsor-table-recruiting\">
                    <li class=\"sponsor-table-feature\">Student resumes</li>
                </ul>
            </div>
            <div class=\"column no-padding sponsor-type-api\">
                <ul class=\"sponsor-table-recruiting\">
                    <li class=\"sponsor-table-feature\">&#43;</li>
                    <li class=\"sponsor-table-feature\">&#43;</li>
                </ul>
            </div>
            <div class=\"column no-padding sponsor-type-recruiting\">
                <ul class=\"sponsor-table-recruiting\">
                    <li class=\"sponsor-table-feature\">&#43;</li>
                    <li class=\"sponsor-table-feature\">&#43;</li>
                    <li class=\"sponsor-table-feature\">Bring recruiters</li>
                    <li class=\"sponsor-table-feature\">Share recruiting materials</li>
                </ul>
            </div>
            <div class=\"column no-padding sponsor-type-corporate\">
                <ul class=\"sponsor-table-recruiting\">
                    <li class=\"sponsor-table-feature\">&#43;</li>
                    <li class=\"sponsor-table-feature\">&#43;</li>
                    <li class=\"sponsor-table-feature\">&#43;</li>
                    <li class=\"sponsor-table-feature\">&#43;</li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"clearfix foot-note hide-for-small\">
        <div class=\"column no-padding medium-7 no-padding\">
            <p>Alternative sponsorship options:</p>
            <ul>
                <li>Pay for a meal (\$500 value)</li>
                <li>Provide venue for CodeDay (\$2,000 value)</li>
            </ul>
        </div>
        <div class=\"column no-padding medium-5 no-padding\">
            <p>
                * You must supply all of your prizes. </br>
                <span>Cannot exceed \$100/person cash value.</span>
            </p>
        </div>
    </div>
    <div class=\"text-center show-for-small-only\">
        <a href=\"codeday-sponsor.pdf\" target=\"_blank\" id=\"sponsor-pdf-button\" class=\"round-corners\">View sponsor PDF</a>
    </div>
    </div>
    </section>

    <section id=\"sponsor-global\" class=\"content row round-corners\">
        <div class=\"wrapper\">
            <h2 class=\"section-title\">Global Sponsorship</h2>
            <hr class=\"separator\">
            <div id=\"sponsor-global-map\" class=\"column no-padding medium-7 no-padding\">
                <img src=\"/assets/img/map.jpg\" alt=\"Map of CodeDay events.\" id=\"map\">
            </div>
            <div id=\"sponsor-global-pitch\" class=\"column medium-5\">
                <h3>This is your reach.</h3>
                <p>Become a global sponsor and support the next innovator.</p>
                <a href=\"mailto:contact@studentrnd.org?subject=Sponsor Inquiry\" id=\"sponsor-contact-us\" class=\"round-corners\">Contact Us</a>
            </div>
        </div>
    </section>
    </main>
";
    }

    public function getTemplateName()
    {
        return "/var/www/new.codeday.org/app/config/../views/sponsor.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 5,  42 => 4,  36 => 3,  30 => 2,);
    }
}
