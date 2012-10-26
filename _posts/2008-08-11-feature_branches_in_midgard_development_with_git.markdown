---
  title: "Feature branches in Midgard development with git"
  categories: 
    - "midgard"
    - ""
  layout: "post"

---
<p>
The <a href="http://bergie.iki.fi/blog/midgard_and_synchronized_releases/">release synchronicity plan</a> was accepted, and therefore Midgard will be switching from SVN to <a href="http://git-scm.com/">git</a>, and the concept of <a href="http://wiki.winehq.org/GitBranches">feature branches</a>.
</p><p>
With feature branches the idea is that each feature or bug fix is being developed in its own branch, and only landed to trunk (master in git terminology) when ready. This keeps the trunk clean and easy to test.
</p><p>
While the SVN migration will only happen in <a href="http://www.midgard-project.org/discussion/developer-forum/next_midgard_developer_meeting_in_october-november/">next developer meeting</a>, you can already start using git for Midgard development thanks to <a href="http://git.or.cz/course/svn.html">git-svn</a>. Once you have a working checkout, here is how you work with feature branches:
</p><p>
Ensure you have the latest stuff:
</p><pre>
git svn rebase
</pre><p>
Create a new branch:
</p><pre>
git branch mynewfeature
</pre><p>
Go to the new branch:
</p><pre>
git checkout mynewfeature
</pre><p>
<em>Hack, add files, commit, test</em>
</p><p>
Ensure the diff looks correct:
</p><pre>
git diff master..HEAD
</pre><p>
Go back to master:
</p><pre>
git checkout master
</pre><p>
Merge your feature branch:
</p><pre>
git merge mynewfeature
</pre><p>
Commit to SVN:
</p><pre>
git svn dcommit
</pre><p>
If you want to also work with other Midgard or MidCOM versions <a href="http://trac.midgard-project.org/timeline">from SVN</a>, check out the <a href="http://www.jukie.net/~bart/blog/svn-branches-in-git">how to track multiple svn branches in git</a> tutorial.
</p>