# magento2-countdown

<h3>Features:</h3>
<ul>
<li>Countdown Label configurable</li>
<li>Works with default Special Price</li>
<li>Works with Default Special price from date and Special price to date</li>
</ul>

<h2>Composer Installation Instructions</h2>
Add GIT Repository to composer
<pre>
composer config repositories.mageget-magento2-countdown vcs https://github.com/mageget/magento2-countdown/
</pre>

Since this package is in a development stage, you will need to change the minimum-stability as well to the composer.json file: -
<pre>
"minimum-stability": "dev",
</pre>

After that, need to install this module as follows:
<pre>
  composer require magento/magento-composer-installer
  composer require mageget/countdown
</pre>


<br/>
<h2> Mannual Installation Instructions</h2>
go to Magento2Project root dir 
create following Directory Structure :<br/>
<strong>/Magento2Project/app/code/Mageget/Countdown</strong>
you can also create by following command:
<pre>
cd /Magento2Project
mkdir app/code/Mageget
mkdir app/code/Mageget/Countdown
</pre>



<h3> Enable Mageget/Countdown Module</h3>
to Enable this module you need to follow these steps:

<ul>
<li>
<strong>Enable the Module</strong>
<pre>bin/magento module:enable Mageget_Countdown</pre></li>
<li>
<strong>Run Upgrade Setup</strong>
<pre>bin/magento setup:upgrade</pre></li>
<li>
<strong>Re-Compile (in-case you have compilation enabled)</strong>
	<pre>bin/magento setup:di:compile</pre>
</li>
</ul>
