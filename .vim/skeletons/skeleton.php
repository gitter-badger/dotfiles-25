<?php

namespace ${1:`!p
abspath = os.path.abspath(path)
m = re.search(r'[A-Z].+(?=/)', abspath)
if m:
	snip.rv = m.group().replace('/', '\\')
`};

/**
 * Class ${1:`!p snip.rv=snip.basename`}
 * @author ${2:`!v g:snips_author`}
 */
class $1
{
}
