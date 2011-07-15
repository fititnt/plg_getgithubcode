Joomla 1.6 Content Plugin GetGithubCode
Import github code on the fly and insert on your articles

Author: Emerson Rocha Luiz - @fititnt - emerson@webdesign.eng.br


------- Basic usage -------
1. Install the plugin. Joomla 1.6+ requered
2. Publish the plugin
3. Add tags whith link to RAW page that you want to inset, like the next example:
    {githug}https://raw.github.com/fititnt/plg_getgithubcode/master/getgithubcode.php{/github}

------- Important -------
* You can use more plugins to edit aparence of code by puttin this plugin before and, editing the start and end tags of generated code.
* For now, this plugin does not have cache enabled. Think about to use Joomla Cache for avoid access all times the github to show your code.

-------   @todo   -------
* Handle better Win linebreaksl* Implement on regex take just some lines of file

------- Changelog -------

2011-07-15: 0.2beta2
- Fixed linebreaks problem. (@todo: need check on win and mac OSs)
- Fixed parameters get

2011-07-15: 0.2beta1
- Changelog start
