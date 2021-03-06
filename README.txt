http://twitter.ncsu.edu

NC State University
 * Outreach Technology (http://ot.ncsu.edu)
 * Web Communications (http://www.ncsu.edu)
 * Contact twitter@ncsu.edu for additional assistance.


The contents of this package are released under the following license:

=================================================

This license is governed by United States copyright law, and with respect to matters
of tort, contract, and other causes of action it is governed by North Carolina law,
without regard to North Carolina choice of law provisions.  The forum for any dispute
resolution shall be in Wake County, North Carolina.

Redistribution and use in source and binary forms, with or without modification, are
permitted provided that the following conditions are met:

1. Redistributions of source code must retain the above copyright notice, this list
   of conditions and the following disclaimer.

2. Redistributions in binary form must reproduce the above copyright notice, this
   list of conditions and the following disclaimer in the documentation and/or other
   materials provided with the distribution.

3. The name of the author may not be used to endorse or promote products derived from
   this software without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE AUTHOR "AS IS" AND ANY EXPRESS OR IMPLIED
WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY
AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE AUTHOR BE
LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL
DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF
ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

=================================================

Notes

*  This code is based on Zend Framework version 1.10.6.  All applicable licenses to Zend
   Framework still apply.
   
*  While not required, we would prefer that you state where the code used to create 
   your site came from.  Our contact information is at the top of this document.
   

Installation

*  Extract the download into a web accessible directory on your webserver

*  Bring up your web browser and go to http://[wherever-you-installed-this-at]/install
   
*  The install script will take you the rest of the way through.
   
*  3 main pages are provied
   - index.php:  Shows all the tweets for the account you setup
   - orgs.php:   Shows all the accounts you are following
   - feed.php:   Provides an RSS feed of all the tweets for the account you setup
   

Known Issues

*  On some systems running PHP 5.3+ there seems to be a delay on writing information to the 
   config.php file.  The information will get written on the first request, but the installer
   sometimes does not recognize this.  It typically takes 3-5 seconds to it to realize the
   necessary actions have been taken.  A simple refresh of the installer page will make the 
   installer kick in.

Any additional questions should be sent to twitter@ncsu.edu.
