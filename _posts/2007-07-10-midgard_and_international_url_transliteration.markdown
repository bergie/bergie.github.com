---
  title: "Midgard and international URL transliteration"
  categories: 
    - "midgard"
  layout: "post"

---
<a href="http://www.midgard-project.org/">Midgard</a> has been an early supporter of <a href="http://www.midgard-project.org/documentation/concepts-i18n/">internationalization in open source CMSs</a>, adding UTF-8 support already in 1999. Today I however got an innocent request:
<blockquote>One thing to be considered is i18n and Unicode support, since the community wiki is the perfect place to host translated docs.</blockquote>I was quite confident that things would work out OK, but knew that the<a href="http://www.midgard-project.org/documentation/net-nemein-wiki/"> Wiki component</a> had had only minimal internationalization testing and so could have had issues. So I went and created some pages in Russian, Georgian and Arabic. So far so good:

<img src="https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/wiki-russian.jpg" height="185" width="398" border="1" hspace="4" vspace="4" alt="Wiki-Russian" />

All Wiki functionality worked as you would expect. Wiki links, <a href="http://daringfireball.net/projects/markdown/syntax">Markdown formatting</a>, backlinks, even <a href="http://www.midgard-project.org/documentation/revision-control-system-with-midcom/">version comparisons</a>:

<img src="https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/wiki-arabic-diff-1.jpg" height="109" width="398" border="1" hspace="4" vspace="4" alt="Wiki-Arabic-Diff-1" />

One issue remained, however: <a href="http://www.midgard-project.org/documentation/midcom">MidCOM</a> has functionality for generating nice, <a href="http://www.onedegree.ca/2006/02/02/the-importance-of-human-readable-urls">readable URL names</a> from object titles. This functionality depended on the <a href="http://pecl.php.net/package/translit">PECL translit extension</a> which, in our tests, proved to be troublesome with some languages.

After a bit of googling we ran into the <a href="http://sourceforge.net/projects/phputf8/">PHP UTF-8 project</a>, and more specifically to its <a href="http://phputf8.cvs.sourceforge.net/phputf8/utf8_to_ascii/README?view=markup">utf8_to_ascii</a> tool that is a PHP port of the <a href="http://interglacial.com/~sburke/tpj/as_html/tpj22.html">Perl Unidecode</a> package. This library was small enough to be bundled into MidCOM itself, removing the dependency of an additional PHP extension, and seemed to cope with various languages much better.

The results were not perfect, of course, but at least West European and Scandinavian languages, Russian, Polish, Greek, Maori and Amharic worked perfectly. Arabic, Hebrew, Chinese, Korean, Thai and Viet produced results that were possibly correct. Japanese (hiragana and katagana), Devanagari and Georgian did not work at all. A good start nevertheless. Here are some tests:

<img src="https://s3.eu-central-1.amazonaws.com/bergie-iki-fi/utf8-transliteration-tests.jpg" height="178" width="400" border="1" hspace="4" vspace="4" alt="Utf8-Transliteration-Tests" />

<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/i18n" rel="tag">i18n</a>, <a href="http://www.technorati.com/tag/midgard" rel="tag">midgard</a>, <a href="http://www.technorati.com/tag/wiki" rel="tag">wiki</a></p>
