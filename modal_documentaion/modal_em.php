<div id="modal4" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- konten modal-->
    <div class="modal-content" style="background: rgba(0, 0, 0, 0.699);
  color: white;
  width: 263%;
  border-radius: 20px;
  margin-left: -80%;
  -webkit-box-shadow: 0 0 5px 2px #fff;
    -moz-box-shadow: 0 0 5px 2px #fff;
    box-shadow: 0 0 5px 5px #fff;">
      <!-- heading modal -->
      <div class="modal-header">
        <center>
          <h6>EM (Effort Multiplier)</h6>
        </center>
        <button type="button" class="close" data-dismiss="modal">&times;</button>

      </div>
      <!-- body modal -->
      <div class="modal-body">
        <table class="table">
          <tr>
            <td>Required Software Reliability (RELY)</td>
            <td>:</td>
            <td>
              This is the measure of the extent to which the software must perform its intended function over a period
              of time. If the effect
              of a software failure is only slight inconvenience then RELY is low. If a failure would risk human life
              then RELY is very
              high.</td>
          </tr>
          <tr>
            <td>Data Base Size</td>
            <td>:</td>
            <td>This measure attempts to capture the affect large data requirements have on product development. The
              reason the size of the database is important to consider it because of the effort required to generate the
              test data that will be used to exercise the program.</td>
          </tr>
          <tr>
            <td>Product Complexity</td>
            <td>:</td>
            <td>Complexity is divided into five
              areas: control operations, computational operations, device-dependent operations, data management
              operations, and user
              interface management operations. Select the area or combination of areas that characterize the product or
              a sub-system of the
              product. The complexity rating is the subjective weighted average of these areas.</td>
          </tr>
          <tr>
            <td>Developed for Reusability</td>
            <td>:</td>
            <td>This cost driver accounts for the additional effort needed to construct components intended for reuse on
              the current or future
              projects. This effort is consumed with creating more generic design of software, more elaborate
              documentation, and more
              extensive testing to ensure components are ready for use in other applications.</td>
          </tr>
          <tr>
            <td>Documentation Match to Lifecycle Needs</td>
            <td>:</td>
            <td>Several software cost models have a cost driver for the level of required documentation. In COCOMO II,
              the rating scale for
              the DOCU cost driver is evaluated in terms of the suitability of the project’s documentation to its
              life-cycle needs. The rating
              scale goes from Very Low (many life-cycle needs uncovered) to Very High (very excessive for life-cycle
              needs).</td>
          </tr>
          <tr>
            <td>Time Constraint</td>
            <td>:</td>
            <td>This is a measure of the execution time constraint imposed upon a software system. The rating is
              expressed in terms of the
              percentage of available execution time expected to be used by the system or subsystem consuming the
              execution time
              resource. The rating ranges from nominal, less than 50% of the execution time resource used, to extra
              high, 95% of the
              execution time resource is consumed.</td>
          </tr>
          <tr>
            <td>Storage Constraint</td>
            <td>:</td>
            <td>This rating represents the degree of main storage constraint imposed on a software system or subsystem.
              Given the remarkable
              increase in available processor execution time and main storage, one can question whether these constraint
              variables are still
              relevant. However, many applications continue to expand to consume whatever resources are available,
              making these cost
              drivers still relevant. The rating ranges from nominal, less that 50%, to extra high, 95%.</td>
          </tr>
          <tr>
            <td>Platform Volatility</td>
            <td>:</td>
            <td>"Platform" is used here to mean the complex of hardware and software (OS, DBMS, etc.) the software
              product calls on to
              perform its tasks. If the software to be developed is an operating system then the platform is the
              computer hardware. If a
              database management system is to be developed then the platform is the hardware and the operating system.
              If a network text
              browser is to be developed then the platform is the network, computer hardware, the operating system, and
              the distributed
              information repositories. The platform includes any compilers or assemblers supporting the development of
              the software
              system. This rating ranges from low, where there is a major change every 12 months, to very high, where
              there is a major
              change every two weeks.</td>
          </tr>
          <tr>
            <td>Analyst Capability</td>
            <td>:</td>
            <td>Analysts are personnel that work on requirements, high level design and detailed design. The major
              attributes that should be
              considered in this rating are Analysis and Design ability, efficiency and thoroughness, and the ability to
              communicate and
              cooperate. The rating should not consider the level of experience of the analyst; that is rated with AEXP.
              Analysts that fall in
              the 15th percentile are rated very low and those that fall in the 95th percentile are rated as very high..
            </td>
          </tr>
          <tr>
            <td>Programmer Capability</td>
            <td>:</td>
            <td>Current trends continue to emphasize the importance of highly capable analysts. However the increasing
              role of complex
              COTS packages, and the significant productivity leverage associated with programmers’ ability to deal with
              these COTS
              packages, indicates a trend toward higher importance of programmer capability as well.
              Evaluation should be based on the capability of the programmers as a team rather than as individuals.
              Major factors which
              should be considered in the rating are ability, efficiency and thoroughness, and the ability to
              communicate and cooperate. The
              experience of the programmer should not be considered here; it is rated with AEXP. A very low rated
              programmer team is in
              the 15th percentile and a very high rated programmer team is in the 95th percentile.</td>
          </tr>
          <tr>
            <td>Personnel Continuity</td>
            <td>:</td>
            <td>The rating scale for PCON is in terms of the project’s annual personnel turnover: from 3%, very high, to
              48%, very low.</td>
          </tr>
          <tr>
            <td>Application Experience</td>
            <td>:</td>
            <td>This rating is dependent on the level of applications experience of the project team developing the
              software system or
              subsystem. The ratings are defined in terms of the project team’s equivalent level of experience with this
              type of application.
              A very low rating is for application experience of less than 2 months. A very high rating is for
              experience of 6 years or more..</td>
          </tr>
          <tr>
            <td>Platform Experience</td>
            <td>:</td>
            <td>The Post-Architecture model broadens the productivity influence of PEXP, recognizing the importance of
              understanding the
              use of more powerful platforms, including more graphic user interface, database, networking, and
              distributed middleware
              capabilities.</td>
          </tr>
          <tr>
            <td>Language and Toolset Experience</td>
            <td>:</td>
            <td>This is a measure of the level of programming language and software tool experience of the project team
              developing the
              software system or subsystem. Software development includes the use of tools that perform requirements and
              design
              representation and analysis, configuration management, document extraction, library management, program
              style and
              formatting, consistency checking, etc. In addition to experience in programming with a specific language
              the supporting tool
              set also effects development time. A low rating given for experience of less than 2 months. A very high
              rating is given for
              experience of 6 or more years.</td>
          </tr>
          <tr>
            <td>Use of Software Tools</td>
            <td>:</td>
            <td>Software tools have improved significantly since the 1970’s projects used to calibrate COCOMO. The tool
              rating ranges from
              simple edit and code, very low, to integrated lifecycle management tools, very high.</td>
          </tr>
          <tr>
            <td>Multisite Development</td>
            <td>:</td>
            <td>Given the increasing frequency of multisite developments, and indications that multisite development
              effects are significant,
              the SITE cost driver has been added in COCOMO II. Determining its cost driver rating involves the
              assessment and averaging
              of two factors: site collocation (from fully collocated to international distribution) and communication
              support (from surface
              mail and some phone access to full interactive multimedia).</td>
          </tr>
          <tr>
            <td>Required Development Schedule</td>
            <td>:</td>
            <td>This rating measures the schedule constraint imposed on the project team developing the software. The
              ratings are defined in
              terms of the percentage of schedule stretch-out or acceleration with respect to a nominal schedule for a
              project requiring a
              given amount of effort. Accelerated schedules tend to produce more effort in the later phases of
              development because more
              issues are left to be determined due to lack of time to resolve them earlier. A schedule compress of 74%
              is rated very low. A
              stretch-out of a schedule produces more effort in the earlier phases of development where there is more
              time for thorough
              planning, specification and validation. A stretch-out of 160% is rated very high.</td>
          </tr>
        </table>
      </div>
      <!-- footer modal -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>