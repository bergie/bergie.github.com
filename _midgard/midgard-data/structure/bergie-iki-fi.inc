'bergie-iki-fi' => array
(
    'name' => 'bergie-iki-fi',
    'title' => 'Henri Bergius',
    'examples' => array
    (
        'http://bergie.iki.fi/',
    ),
    'root' => array
    (
        'name' => 'bergie-iki-fi',
        'title' => 'Bergie',
        'component' => 'net.nehmer.static',
        'style' => '/bergie2006',
        'style_inherit' => true,
        'create_index' => true,
        'parameters' => array
        (
            'midcom_24' => array
            (
                'component' => 'de.linkm.taviewer',
                'style' => '/Bergie 2005/frontpage',
            ),
            'midcom.helper.nav' => array
            (
                'navorder' => 0,
            ),
            'midcom.helper.metadata' => array
            (
                'approved' => 1113680906,
                'approver' => 'c8b76e1e47b3427dfba717aad7a7c6a3',
            ),
            'midcom' => array
            (
                'component' => 'net.nehmer.static',
            ),
            'net.nehmer.static' => array
            (
                'sort_order' => 'score',
                'schemadb' => '/sitegroup-config/net.nehmer.static/schemadb_frontpage',
            ),
        ),
        'acl' => array(),
        'nodes' => array
        (
            'blog' => array
            (
                'name' => 'blog',
                'title' => 'Weblog',
                'component' => 'net.nehmer.blog',
                'style' => '/bergie2006/blog',
                'style_inherit' => true,
                'parameters' => array
                (
                    'midcom_24' => array
                    (
                        'component' => 'de.linkm.newsticker',
                        'style' => '/Bergie 2005/blog',
                    ),
                    'de.linkm.newsticker' => array
                    (
                        'rss_title' => 'Henri Bergius',
                        'rss_description' => 'Blog postings from Henri Bergius',
                        'rss_webmaster' => 'henri.bergius@iki.fi',
                        'rss_language' => 'en',
                        'index_list_old' => 1,
                        'enable_details' => 1,
                        'count' => 6,
                        'enable_subdirs' => 0,
                        'rss_count' => 25,
                        'enable_filters_get' => 1,
                        'enable_datefilters_get' => 0,
                        'enable_datefilters_path' => 1,
                        'rss_enable' => 1,
                        'pp_enable' => 0,
                    ),
                    'images' => array
                    (
                        'witharticle' => 'YES',
                    ),
                    'midcom.helper.nav' => array
                    (
                        'navorder' => 0,
                    ),
                    'midcom.helper.metadata' => array
                    (
                        'approved' => 1113680911,
                        'approver' => 'c8b76e1e47b3427dfba717aad7a7c6a3',
                    ),
                    'midcom' => array
                    (
                        'component' => 'net.nehmer.blog',
                    ),
                    'net.nehmer.blog' => array
                    (
                        'index_entries' => 10,
                        'rss_enable' => 1,
                        'rss_count' => 20,
                        'rss_title' => 'Henri Bergius',
                        'rss_description' => 'Motorcycle Adventures and Free Software from Henri Bergius',
                        'rss_webmaster' => 'henri.bergius@iki.fi',
                        'rss_language' => 'en',
                    ),
                    'midcom.helper.datamanager2.type.blobs' => array
                    (
                        'guids_midcom_helper_imagepopup_images' => 'e1d8bb35e51147ceb0c424586c458e1dmain:1df6fd4e68d136c6fd411df8eb03d0a5ffbbaa9baa9,8cb1cfa0ba6dd8e2d823acac1c5bbefbmain:1df6fd4f87258086fd411df8eb03d0a5ffbbaa9baa9,cb2a828534d0a005c28056cb64dd7151main:1df6fd5082c1aa46fd511df8eb03d0a5ffbbaa9baa9,cb765fa1f8993892185a58e28c8e13d7main:1df964a011a2f12964a11df9880551b6cff5df65df6,c84efe59be21f8353e6c2a634e9622d4main:1df82b418e85d4882b411df8e0f9d54d6b1ca1aca1a,3fb7f100e81fa97845fa706f61cc75d1main:1df99b152d8fbca99b111df8c291f845ff4792c792c,acf9a19e302b93a39e003615cef3cddemain:1df99b12c14931e99b111dfb2649b40ceb420042004,f030853d71429430caec6cd8a81944d4main:1df99b19296459c99b111dfbf84d704b90a3b663b66,b4536ea30b210750bbb40b080a6950e9main:1e008569a113106085611e0ae7ee1354126059e059e,71eedbfbe5f94e1857455c2691ab56f5main:1e0085621b63878085611e097922d9448f9055b055b,534e62655e703d051258e0c8a287a5abmain:1e003c0d75f321403c011e0bb5b1b0c333ac0b3c0b3,12dfb2d33133719602513f9559741f0fmain:1df3203321b73ba320311df96f1fd6cee6a91709170,c96d07aef46dfd44fb3ea7f3c7f9cad3main:1df3202625fb4e2320211df96f1fd6cee6a91709170,783ad8df537b363856547726c5b5459emain:1df32035ad2fc1a320311df80cfc1cacbe5946a946a,53b6db43b64d08934cf33bf516560bc3main:1df3202fe3bb7ee320211df80cfc1cacbe5946a946a,88c9b4ec18873ab4f15a2c7333116073main:1df32022a590a94320211dfb0f36fd381e98e6a8e6a,91b1b3a7ee303bb8329659241f25feccmain:1df8b61f149052e8b6111df872e5fe1995d51425142,b163f208ca764734c95864bdc7c8888cmain:1e044345cc24cbc443411e0b06153d27d3672757275,b49bd3dae3487ef5271b474c70d5070bmain:1dfeb2849258e72eb2811df9418cff85d556eea6eea,d5c1dd9584941f742a3ab99474858726main:1dfeb285a49033ceb2811dfa01fef8418608bb28bb2,61caa66acf4850f24ea25a759cdfdedemain:1e04438bb57f5ca443811e0b7f299cfb19e66486648,5e080536bf84b2b2318463880dc15535main:1df2077771ab4aa207711dfb6718745055195119511,6f7a53f41ac40eb150b1fbbfac1d775dmain:1dfb6ad33119572b6ad11dfab2e4156018b85978597,4bcbc4ebc139197e8d0856576a71c0eamain:1df167f580263c6167f11df81245d5e545e0dec0dec,af30779001c026d599952829f2d57e16main:1e044d89d39d3ce44d811e09c1df9ff48231c331c33,cee3b64062777d77fb4bb4b3bec18acdmain:1e03f6a6cfe27003f6a11e0a60db5207a8570387038,637932292483ea643c17aa6feee50f03main:1e03f6a7c83d8dc3f6a11e0a60db5207a8570387038,9d25823957dfecd101450904969a55e7main:1e03f6a5bcbe4223f6a11e0a60db5207a8570387038,c0fa885e44e76a7ffc2400224bf4001fmain:1dfeda1a3fd6920eda111dfb59de79f215dca08ca08,d5de475719f68ef59d65be9d07f724acmain:1dff72a17ecddcaf72a11df85f553d3de64e756e756,7021dfbc8e39f82b3743d6ff2724f802main:1df99b1bdbd0be899b111dfbf84d704b90a3b663b66,d3510be72c2f30b3ebacf18cdcbfc47dmain:1dee634b5fac020e63411de9904ab110e3992649264,4b13550e629d61b4893bf4f68e473a4emain:1df64cc8af1955464cc11dfa27e2702d32509890989,a1ead06c64b0d2251531ab2d726436a6main:1e0652eeaac22f8652e11e09cc78353a203ee5bee5b,58b16eb5a96a865bb20a9fdd274d5b39main:1defc49935f6be4fc4911debde41b4695a22b2b2b2b,5a87f71cb13bcebce3294d19c3e6b569main:1df1657ccade8c6165711dfba5f45ffba46b268b268,31a16ea36b02c9d875ba62bfd6f04709main:1df9649e66c9e66964911dfb7016fec1e9c78907890,2175894937b719fbc3d31eae2c84c388main:1dff40fe734a180f40f11dfa23999078cd0a757a757,95de21d5bd2f44bdc7f3e40df53d3121main:1df99b0fbedc9d099b011df9cde59aa729dc602c602,34aa0cbcb459f83d6ab3b3318f4a0f62main:1e0d7d2eeae653ed7d211e0ad084b49cc799d7c9d7c,14fc77b51a352ed9907d1679fec7135fmain:1e071b17632db3071b111e09d42ef63fbf46c4b6c4b,7899a4a358f3b553937ecf3f79ad7efcmain:1df214be6d9568c214b11df85c435f51c00c07ac07a,fe3bc50f181ad963d20dc2da3aea8daamain:1dfe3663e92db6ee36611df87f3dffe74c8636d636d,32a299b488e0c8d9b6f9b9d0eab46baemain:1dec20eba3e024ac20e11deb6f2bb012b9e7a607a60,3866b0afabd1c7ec2d455b6fac0e2354main:1e066945d1c31dc669411e084ffdb83d1a7cb35cb35,3f0e63289557c7c98153d4613f67ce02main:1dfc2615cf26712c26111df8e7057783b4ebdb5bdb5,3d9c49060e955b06de712eb801b2798bmain:1df214b955a0432214b11df8240e36785e2ee2fee2f,4ee5f98909b958cd24f59a00d2c52732main:1df214bb9e88c06214b11df9a008b182b8765336533,da8cb258ccf8f755502544926c775808main:1df1adcc83389021adc11dfbd6acbf8ba612c7f2c7f,73d94e0f3eaf34fe270fbc4f15caef33main:1dec20ee98e2016c20e11deacd1ed2738b715511551,1fa43d23fd2d0a1a10b7aa770b14720dmain:1df3201efbd09f8320111df80bbcb7714e98cae8cae,76e1d17cceab8594f7bc6b1664a0f5d2main:1ded84fd014f496d84f11deb7eda5dcade1825f825f,6f67a2a5258c6755499608b7aeec55bemain:1df7ebd0f39e0467ebd11dfb50cc71550a9171e171e,d3d277e52bb0a06b2bf18bded64380b2main:1e0443b57ae032c443b11e08df6cd11de31dab7dab7,6461e219a0e1f5c055705c052a977d6amain:1e00c7c2d85daa80c7c11e0b9fe1954500ef74cf74c,085d3c28c8e86d423000f87fd891cef7main:1e0459adeb501da459a11e0b28a0de6ae4ed17cd17c,d18d058ee7e9c75ccc4b195756fe9a9amain:1e0459cd7210c0a459c11e08e2627c15b7cedefedef,93a049cfcee62375a7623d6596ca1610main:1e0459bfc268c24459b11e09441fb19df2a583a583a,36ee4b4057d891df3cae7472a306fcdbmain:1e0459e2f9f6074459e11e0a224fb773dfe86ae86ae,820287ba9ab115bde246758eb3eb484amain:1e04599ef1af0ee459911e0b8b15798f7d7df13df13,acc1eda628b9077847bb60bd6ed550cbmain:1e045994d03c25e459911e0ab235550c1aac901c901,4031cc614ea00393edfba2cbf4db49ebmain:1e0459a8ff9170c459a11e0b4acc38b0b96e868e868,d0576e92852d150d5ff529b18fec1708main:1e0459bd30e890e459b11e0b4acc38b0b96e868e868,353400d41d6ef91c2d38bc184a0655c8main:1e04599abfee694459911e0bf1021b4fddbed1bed1b,9de759df3d4276e6c703e5cefc577275main:1dff8bc41348f32f8bc11dfac206d0a8e3106b306b3,83654c333b9b447fc1f096303aee8c0fmain:1ded443591ef040d44311deaedd1725f0bcefd2efd2,ec44928fc1ddf1bab521d3622235568cmain:1dec324852f9570c32411deb5a29f762cafab34ab34,264adf82c54c91c9984ec009a1d521f5main:1e04434e895096e443411e0935c736b84ef660a660a,894ae5bb94d96ecdc6d875ab883c568bmain:1e0d55317b0f154d55311e0a7e177ab46dbbff1bff1,23e7bdb0dd2bb2c372f1ee8745f7b1d6main:1e0c03dc1eb3d1cc03d11e0853e692a724efbc6fbc6,b30398b8972f5597019735f41e71eec6main:1e0c03da3d93d7ec03d11e0ad7493d9595d183c183c,09dd9d242d9428f031479b7ac814a5dcmain:1dfeb47a65659cceb4711df92736d20e1e926c126c1,73c9b3f9eee9a843faa674fdbcd81ce4main:1dee31c4ce968c2e31c11debf62f3c6055f93e593e5,12715c29f710daa8ee8f34919627ca5cmain:1dee31c7cdc66ece31c11debf62f3c6055f93e593e5,739d88505363a40eb7479cfb408a0d3emain:1dee31ca40741f6e31c11debee103281e6b28852885,abd7c3122e67c849b93d1919c0a2a2ffmain:1dee31d12a21be0e31d11deb6d907f046a37c467c46,42c65df36f3957e1a5d39b7274fd615bmain:1df2bbe864279c02bbe11df8849b307a0df59445944,5285369f1dfda53bc468d615680c5984main:1df2bbd3c08f3262bbd11dfb984e5004382fa3ffa3f,7d779a5e1ccacca51cb04fe95865fb71main:1df626db4e8c50a626d11df8459a7c8cecec16cc16c,814cbffe53805ca44662222aa4bb7c3cmain:1df626e9668a7e8626e11dfb3bbcd6b43ab91559155,4628095fb5fcba75d3bd563baed34ca3main:1df626ec2e14de8626e11df8cba619e190f97349734,7c7b01ffe3ff7e1c8c08a087660bffd4main:1df626e2adb53ea626e11df8cfa9534778f43954395,9379771a2978c5674f5fb04bf4fae399main:1df9584cd985724958411dfa136e3b7372904a904a9,b0e2442824692c2502300282b1b8e7f1main:1df59f95f46c97a59f911df997e7567a2f979277927,d3f8558e0aa7847e84c4415931e44d6fmain:1df547838299100547811dfb12ca57deece79d679d6,99a95197a8bd53afb9168237dc757fedmain:1def5febc8f9aeef5fe11de9b44cb847ee61f091f09,bc10e594d850534660cc1e7a8341d634main:1dfe5d78d0bba5ee5d711df9f75c7d1c8d6e5a0e5a0,cc49ddefa58fb605ce2bca193050d37cmain:1df94eaba47081894ea11df8003ad955f7114821482,12501392eebaeefa66c584ce92d0898bmain:1e0ede7a7914e20ede711e09b9da90a21eb97ea97ea',
                    ),
                    'midcom.helper.datamanager2.type.images' => array
                    (
                        'attachment_map_midcom_helper_imagepopup_images' => 'e1d8bb35e51147ceb0c424586c458e1dmain:e1d8bb35e51147ceb0c424586c458e1d:main,8cb1cfa0ba6dd8e2d823acac1c5bbefbmain:8cb1cfa0ba6dd8e2d823acac1c5bbefb:main,cb2a828534d0a005c28056cb64dd7151main:cb2a828534d0a005c28056cb64dd7151:main,cb765fa1f8993892185a58e28c8e13d7main:cb765fa1f8993892185a58e28c8e13d7:main,c84efe59be21f8353e6c2a634e9622d4main:c84efe59be21f8353e6c2a634e9622d4:main,3fb7f100e81fa97845fa706f61cc75d1main:3fb7f100e81fa97845fa706f61cc75d1:main,acf9a19e302b93a39e003615cef3cddemain:acf9a19e302b93a39e003615cef3cdde:main,f030853d71429430caec6cd8a81944d4main:f030853d71429430caec6cd8a81944d4:main,b4536ea30b210750bbb40b080a6950e9main:b4536ea30b210750bbb40b080a6950e9:main,71eedbfbe5f94e1857455c2691ab56f5main:71eedbfbe5f94e1857455c2691ab56f5:main,534e62655e703d051258e0c8a287a5abmain:534e62655e703d051258e0c8a287a5ab:main,12dfb2d33133719602513f9559741f0fmain:12dfb2d33133719602513f9559741f0f:main,c96d07aef46dfd44fb3ea7f3c7f9cad3main:c96d07aef46dfd44fb3ea7f3c7f9cad3:main,783ad8df537b363856547726c5b5459emain:783ad8df537b363856547726c5b5459e:main,53b6db43b64d08934cf33bf516560bc3main:53b6db43b64d08934cf33bf516560bc3:main,88c9b4ec18873ab4f15a2c7333116073main:88c9b4ec18873ab4f15a2c7333116073:main,91b1b3a7ee303bb8329659241f25feccmain:91b1b3a7ee303bb8329659241f25fecc:main,b163f208ca764734c95864bdc7c8888cmain:b163f208ca764734c95864bdc7c8888c:main,b49bd3dae3487ef5271b474c70d5070bmain:b49bd3dae3487ef5271b474c70d5070b:main,d5c1dd9584941f742a3ab99474858726main:d5c1dd9584941f742a3ab99474858726:main,61caa66acf4850f24ea25a759cdfdedemain:61caa66acf4850f24ea25a759cdfdede:main,5e080536bf84b2b2318463880dc15535main:5e080536bf84b2b2318463880dc15535:main,6f7a53f41ac40eb150b1fbbfac1d775dmain:6f7a53f41ac40eb150b1fbbfac1d775d:main,4bcbc4ebc139197e8d0856576a71c0eamain:4bcbc4ebc139197e8d0856576a71c0ea:main,af30779001c026d599952829f2d57e16main:af30779001c026d599952829f2d57e16:main,cee3b64062777d77fb4bb4b3bec18acdmain:cee3b64062777d77fb4bb4b3bec18acd:main,637932292483ea643c17aa6feee50f03main:637932292483ea643c17aa6feee50f03:main,9d25823957dfecd101450904969a55e7main:9d25823957dfecd101450904969a55e7:main,c0fa885e44e76a7ffc2400224bf4001fmain:c0fa885e44e76a7ffc2400224bf4001f:main,d5de475719f68ef59d65be9d07f724acmain:d5de475719f68ef59d65be9d07f724ac:main,7021dfbc8e39f82b3743d6ff2724f802main:7021dfbc8e39f82b3743d6ff2724f802:main,d3510be72c2f30b3ebacf18cdcbfc47dmain:d3510be72c2f30b3ebacf18cdcbfc47d:main,4b13550e629d61b4893bf4f68e473a4emain:4b13550e629d61b4893bf4f68e473a4e:main,a1ead06c64b0d2251531ab2d726436a6main:a1ead06c64b0d2251531ab2d726436a6:main,58b16eb5a96a865bb20a9fdd274d5b39main:58b16eb5a96a865bb20a9fdd274d5b39:main,5a87f71cb13bcebce3294d19c3e6b569main:5a87f71cb13bcebce3294d19c3e6b569:main,31a16ea36b02c9d875ba62bfd6f04709main:31a16ea36b02c9d875ba62bfd6f04709:main,2175894937b719fbc3d31eae2c84c388main:2175894937b719fbc3d31eae2c84c388:main,95de21d5bd2f44bdc7f3e40df53d3121main:95de21d5bd2f44bdc7f3e40df53d3121:main,34aa0cbcb459f83d6ab3b3318f4a0f62main:34aa0cbcb459f83d6ab3b3318f4a0f62:main,14fc77b51a352ed9907d1679fec7135fmain:14fc77b51a352ed9907d1679fec7135f:main,7899a4a358f3b553937ecf3f79ad7efcmain:7899a4a358f3b553937ecf3f79ad7efc:main,fe3bc50f181ad963d20dc2da3aea8daamain:fe3bc50f181ad963d20dc2da3aea8daa:main,32a299b488e0c8d9b6f9b9d0eab46baemain:32a299b488e0c8d9b6f9b9d0eab46bae:main,3866b0afabd1c7ec2d455b6fac0e2354main:3866b0afabd1c7ec2d455b6fac0e2354:main,3f0e63289557c7c98153d4613f67ce02main:3f0e63289557c7c98153d4613f67ce02:main,3d9c49060e955b06de712eb801b2798bmain:3d9c49060e955b06de712eb801b2798b:main,4ee5f98909b958cd24f59a00d2c52732main:4ee5f98909b958cd24f59a00d2c52732:main,da8cb258ccf8f755502544926c775808main:da8cb258ccf8f755502544926c775808:main,12501392eebaeefa66c584ce92d0898bmain:12501392eebaeefa66c584ce92d0898b:main,73d94e0f3eaf34fe270fbc4f15caef33main:73d94e0f3eaf34fe270fbc4f15caef33:main,1fa43d23fd2d0a1a10b7aa770b14720dmain:1fa43d23fd2d0a1a10b7aa770b14720d:main,76e1d17cceab8594f7bc6b1664a0f5d2main:76e1d17cceab8594f7bc6b1664a0f5d2:main,6f67a2a5258c6755499608b7aeec55bemain:6f67a2a5258c6755499608b7aeec55be:main,d3d277e52bb0a06b2bf18bded64380b2main:d3d277e52bb0a06b2bf18bded64380b2:main,6461e219a0e1f5c055705c052a977d6amain:6461e219a0e1f5c055705c052a977d6a:main,085d3c28c8e86d423000f87fd891cef7main:085d3c28c8e86d423000f87fd891cef7:main,d18d058ee7e9c75ccc4b195756fe9a9amain:d18d058ee7e9c75ccc4b195756fe9a9a:main,93a049cfcee62375a7623d6596ca1610main:93a049cfcee62375a7623d6596ca1610:main,36ee4b4057d891df3cae7472a306fcdbmain:36ee4b4057d891df3cae7472a306fcdb:main,820287ba9ab115bde246758eb3eb484amain:820287ba9ab115bde246758eb3eb484a:main,acc1eda628b9077847bb60bd6ed550cbmain:acc1eda628b9077847bb60bd6ed550cb:main,4031cc614ea00393edfba2cbf4db49ebmain:4031cc614ea00393edfba2cbf4db49eb:main,d0576e92852d150d5ff529b18fec1708main:d0576e92852d150d5ff529b18fec1708:main,353400d41d6ef91c2d38bc184a0655c8main:353400d41d6ef91c2d38bc184a0655c8:main,9de759df3d4276e6c703e5cefc577275main:9de759df3d4276e6c703e5cefc577275:main,83654c333b9b447fc1f096303aee8c0fmain:83654c333b9b447fc1f096303aee8c0f:main,ec44928fc1ddf1bab521d3622235568cmain:ec44928fc1ddf1bab521d3622235568c:main,264adf82c54c91c9984ec009a1d521f5main:264adf82c54c91c9984ec009a1d521f5:main,894ae5bb94d96ecdc6d875ab883c568bmain:894ae5bb94d96ecdc6d875ab883c568b:main,23e7bdb0dd2bb2c372f1ee8745f7b1d6main:23e7bdb0dd2bb2c372f1ee8745f7b1d6:main,b30398b8972f5597019735f41e71eec6main:b30398b8972f5597019735f41e71eec6:main,09dd9d242d9428f031479b7ac814a5dcmain:09dd9d242d9428f031479b7ac814a5dc:main,73c9b3f9eee9a843faa674fdbcd81ce4main:73c9b3f9eee9a843faa674fdbcd81ce4:main,12715c29f710daa8ee8f34919627ca5cmain:12715c29f710daa8ee8f34919627ca5c:main,739d88505363a40eb7479cfb408a0d3emain:739d88505363a40eb7479cfb408a0d3e:main,abd7c3122e67c849b93d1919c0a2a2ffmain:abd7c3122e67c849b93d1919c0a2a2ff:main,42c65df36f3957e1a5d39b7274fd615bmain:42c65df36f3957e1a5d39b7274fd615b:main,5285369f1dfda53bc468d615680c5984main:5285369f1dfda53bc468d615680c5984:main,7d779a5e1ccacca51cb04fe95865fb71main:7d779a5e1ccacca51cb04fe95865fb71:main,814cbffe53805ca44662222aa4bb7c3cmain:814cbffe53805ca44662222aa4bb7c3c:main,4628095fb5fcba75d3bd563baed34ca3main:4628095fb5fcba75d3bd563baed34ca3:main,7c7b01ffe3ff7e1c8c08a087660bffd4main:7c7b01ffe3ff7e1c8c08a087660bffd4:main,9379771a2978c5674f5fb04bf4fae399main:9379771a2978c5674f5fb04bf4fae399:main,b0e2442824692c2502300282b1b8e7f1main:b0e2442824692c2502300282b1b8e7f1:main,d3f8558e0aa7847e84c4415931e44d6fmain:d3f8558e0aa7847e84c4415931e44d6f:main,99a95197a8bd53afb9168237dc757fedmain:99a95197a8bd53afb9168237dc757fed:main,bc10e594d850534660cc1e7a8341d634main:bc10e594d850534660cc1e7a8341d634:main,cc49ddefa58fb605ce2bca193050d37cmain:cc49ddefa58fb605ce2bca193050d37c:main',
                    ),
                ),
                'acl' => array(),
                'nodes' => array(),
            ),
            'about' => array
            (
                'name' => 'about',
                'title' => 'About me',
                'component' => 'net.nehmer.static',
                'style' => '',
                'style_inherit' => false,
                'create_index' => true,
                'parameters' => array
                (
                    'midcom_24' => array
                    (
                        'component' => 'de.linkm.taviewer',
                    ),
                    'midcom.helper.metadata' => array
                    (
                        'approved' => 1113680910,
                        'approver' => 'c8b76e1e47b3427dfba717aad7a7c6a3',
                    ),
                    'midcom' => array
                    (
                        'component' => 'net.nehmer.static',
                    ),
                    'net.nehmer.static' => array
                    (
                        'sort_order' => 'score',
                    ),
                ),
                'acl' => array(),
                'nodes' => array
                (
                    'cv' => array
                    (
                        'name' => 'cv',
                        'title' => 'Curriculum Vitae',
                        'component' => 'net.nemein.redirector',
                        'style' => '',
                        'style_inherit' => false,
                        'parameters' => array
                        (
                            'midcom.helper.datamanager2' => array
                            (
                                'schema_name' => 'default',
                            ),
                            'midcom.helper.nav' => array
                            (
                                'nav_order' => 0,
                            ),
                            'net.nemein.redirector' => array
                            (
                                'redirection_type' => 'url',
                                'redirection_url' => 'http://www.linkedin.com/in/bergie',
                                'redirection_code' => 302,
                            ),
                        ),
                        'acl' => array(),
                        'nodes' => array(),
                    ),
                ),
            ),
            'status' => array
            (
                'name' => 'status',
                'title' => 'Status messages',
                'component' => 'org.routamc.statusmessage',
                'style' => '',
                'style_inherit' => false,
                'parameters' => array
                (
                    'midcom.helper.nav' => array
                    (
                        'navorder' => 0,
                    ),
                ),
                'acl' => array(),
                'nodes' => array(),
            ),
            'moblog' => array
            (
                'name' => 'moblog',
                'title' => 'Moblog',
                'component' => 'org.routamc.photostream',
                'style' => '/bergie2006/gallery',
                'style_inherit' => true,
                'parameters' => array
                (
                    'midcom.helper.nav' => array
                    (
                        'navorder' => 0,
                    ),
                ),
                'acl' => array(),
                'nodes' => array(),
            ),
            'consulting' => array
            (
                'name' => 'consulting',
                'title' => 'Consulting',
                'component' => 'net.nehmer.static',
                'style' => '',
                'style_inherit' => false,
                'create_index' => true,
                'parameters' => array
                (
                    'midcom.helper.datamanager2' => array
                    (
                        'schema_name' => 'default',
                    ),
                    'midcom.helper.nav' => array
                    (
                        'nav_order' => 0,
                    ),
                ),
                'acl' => array(),
                'nodes' => array(),
            ),
            'top_items' => array
            (
                'name' => 'top_items',
                'title' => 'Top items',
                'component' => 'org.maemo.socialnews',
                'style' => '/bergie2006/top_items',
                'style_inherit' => false,
                'parameters' => array
                (
                    'midcom.helper.datamanager2' => array
                    (
                        'schema_name' => 'default',
                    ),
                    'midcom.helper.nav' => array
                    (
                        'nav_order' => 0,
                    ),
                ),
                'acl' => array(),
                'nodes' => array(),
            ),
            'travels' => array
            (
                'name' => 'travels',
                'title' => 'Travels',
                'component' => 'net.nemein.calendar',
                'style' => '/bergie2006/travels',
                'style_inherit' => false,
                'parameters' => array
                (
                    'midcom.helper.datamanager2' => array
                    (
                        'schema_name' => 'default',
                    ),
                    'midcom.helper.nav' => array
                    (
                        'nav_order' => 0,
                    ),
                    'net.nemein.calendar' => array
                    (
                        'list_from_folders' => '||',
                        'rss_subscription_enable' => 1,
                    ),
                ),
                'acl' => array(),
                'nodes' => array(),
            ),
            'comments' => array
            (
                'name' => 'comments',
                'title' => 'Comments',
                'component' => 'net.nehmer.comments',
                'style' => '/bergie2006/comments',
                'style_inherit' => false,
                'parameters' => array
                (
                    'midcom.helper.datamanager2' => array
                    (
                        'schema_name' => 'default',
                    ),
                    'midcom.helper.nav' => array
                    (
                        'nav_order' => 0,
                        'navnoentry_en' => 0,
                    ),
                ),
                'acl' => array(),
                'nodes' => array(),
            ),
        ),
    ),
),
