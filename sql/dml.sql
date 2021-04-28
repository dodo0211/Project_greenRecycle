SET FOREIGN_KEY_CHECKS = 0; 
truncate table `green_recycle_db`.`product_table`;
truncate table `green_recycle_db`.`member_table`;
SET FOREIGN_KEY_CHECKS = 1;

use `green_recycle_db`;

select * from `member_table`;

-- INSERT INTO `member_table` VALUES ('admin', '1234', '송훈일', '01079978395', '주소', curdate());

-- 사무용	A	가구	a	Aa
-- 		사무용품	b	Ab
-- 		의자	c	Ac
-- 		쇼파	d	Ad
-- 		금고	e	Ae
-- 		TV	f	Af
-- 		모니터	g	Ag
-- 가정용	B	가구	a	Ba
-- 		가전	b	Bb
-- 인테리어	C	소품	a	Ca
-- 주방	D	주방기기	a	Da
-- 		주방용품	b	Db
-- 		식기_업소용	c	Dc
-- 		식기_가정용	d	Dd
-- 		유기 그릇	e	De
-- 수집	E	수집	a	Ea
-- 산업	F	산업용품	a	Fa
-- 		산업자재	b	Fb
-- 의류	G	잡화	a	Ga
-- 		가방	b	Gb
-- 		신발	c	Gc
-- 		의류	d	Gd
-- 그림	H	동양화	a	Ha
-- 		서양화	b	Hb
-- 건축자재	I	건축자재	a	Ia

INSERT INTO `product_table` VALUES (null, 'Ca', '가림막', 4, 150000, 
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MTdfNjIg/MDAxNjE4NjE3OTg2NDM4.x89ssLF2U22Pi4KGWrQL2ePbCAdD1xGdoLxxHWly-z0g.bccOODoKdvgiHqnLhQp3e_gN-jiKrSLm3XOkA-VwaDEg.JPEG/KakaoTalk_20210416_102701830.jpg?type=w1600',
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MTdfOSAg/MDAxNjE4NjE3OTg2NDM5.ertN8xnwnKeOtezcrmB8rBPbhe43le8OfJCeoaA6Q6Eg.M1tKK0ZsIu12lH-UiYY7aD1CBOcp7xK0ka6FqhGn-ngg.JPEG/KakaoTalk_20210416_102702002.jpg?type=w1600',
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MTdfMjYy/MDAxNjE4NjE3OTg2NDMw.zxGmw35FvuVUrsOIdjXCV_Eb81eW5vXuIcWt05DV-h0g.N1LNoNhogvqWzdpgv_wA8BANIwn0SpDwRUyXGpPVZ-0g.JPEG/KakaoTalk_20210416_102702184.jpg?type=w1600',
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MTdfMjIx/MDAxNjE4NjE3OTg2NDUx.rTCJTnxIsIvI12EUBgf8WsyXnCS1N3P5kwVOOE916LIg.gQaBJess424k80lw3PitnbZ5cI_jQvIDkpJMKERNoiAg.JPEG/KakaoTalk_20210416_102702420.jpg?type=w1600',
	null,
	null,
	null,
	null,
    curdate()
);

INSERT INTO `product_table` VALUES (null, 'Ca', '레트로 전등', 1, 50000, 
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MTNfMTYw/MDAxNjE4Mjc0Mzg4NDc2.Jz_1JZUVtJbOf4C1jqOC4YLYBlNELybGfnkfAcb-oDwg.6Tsip0s8YML-0kdYbhwczwaj8s_E59mURzh9jj4BZWIg.JPEG/151224931_1_1618032237_w856.jpg?type=w1600',
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MTNfMjYw/MDAxNjE4Mjc0Mzg4NDU4._39d_6hRJiliU4OrtjsbOf7B9bsZ27lvLjn8KPK_dvog.W7Qq3FSsLC4KRL2mzp0vwZitkDPBctAB1duPox9sXrog.JPEG/151224931_2_1618032237_w856.jpg?type=w1600',
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MTNfMjEy/MDAxNjE4Mjc0Mzg4NTA0.0ef74K_2B5qaEpndYGswFQ5csB7QT8S2o6hTDl6F7Zkg.fiqFyk_R5MZJqP1ZcOw3VH04tkH-aQ5RML-ClhZQ8-kg.JPEG/151224931_3_1618032237_w1100.jpg?type=w1600',
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MTNfMTg3/MDAxNjE4Mjc0Mzg4NDY1.7VGHCxwz-beP64XQjln4Ypx_UTPvcMOjE7BrEij-k3Qg.FdMnejy68tefR6AsqwsY-ERYH9ccSLzKqEqt4_mU9gcg.JPEG/151224931_4_1618032237_w856.jpg?type=w1600',
	null,
	null,
	null,
	null,
    curdate()
);

INSERT INTO `product_table` VALUES (null, 'Ca', '코끼리 조각상', 1, 1000000, 
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MDVfNCAg/MDAxNjE3NjEzNTE5NTcz.Lbxy14JhBo3TgCwF-d4pVUbgR6RZ4I239TSomO81P5Qg.X1e2nAolYjUuOzv1jLOChpT1a3T7KZ8BEYoeyeAnt8cg.JPEG/150773360_1_1617598529_w1100.jpg?type=w1600',
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MDVfMTkw/MDAxNjE3NjEzNTE5NTgw.I-W5Cjn8K3Rw4bF4iBTRgEqDy-YurfV4i-idRv-8j8Mg.8gWWaMEqTQTqSlUVbsTywU4IrpaKHWrt1xJ4nOKyv1kg.JPEG/150773360_2_1617598529_w1100.jpg?type=w1600',
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MDVfMjIy/MDAxNjE3NjEzNTE5NjE4.AGJJ4udgk_HnOkMmQ-seZf2pp_64tsqMjr91b3IWVkMg.LoLfl5UShIrbHVk9C5E0iJjES215kzkgqM33D0TLAscg.JPEG/150773360_3_1617598529_w1100.jpg?type=w1600',
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MDVfMTYg/MDAxNjE3NjEzNTE5NTgw.btRbDIsZeFwOvB4jqZrR4HTs7vEaUDOFKiMIBzcDFlkg.z8dlQpSjXebMhmerQvvzMTovXTuR-dx6Sx6QCC3oGjMg.JPEG/150773360_4_1617598529_w1100.jpg?type=w1600',
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MDVfNjQg/MDAxNjE3NjEzNTE5NTc3.g1YeY5MWl5LWEUn8WeTZ1JfE8A_u_d4-8-01RiTdetIg.rFWuDX5dCT-S49Fvf9h8Tqg72lSBcwzwtmLAoajNXdYg.JPEG/150773360_5_1617598529_w1100.jpg?type=w1600',
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MDVfNDcg/MDAxNjE3NjEzNTE5ODgw.AyzUilKq23-VWVNttwv1ltQUiF3wRTq29VvEXzwVZXwg.ZKZ7tDO2D0D8hwWIdraeKCyJ5TE9OS-TDO2p_W3ubEIg.JPEG/150773360_7_1617598529_w856.jpg?type=w1600',
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MDVfMTk4/MDAxNjE3NjEzNTE5OTQ2.TWWscbyFiiq1BDNLhKbmnLBKZv4_UP8Y2kdSbVnPyjgg.JfhASNLQ3t989b2k4ecMa1wSNE9CLqO0WRuDksQq23cg.JPEG/150773360_8_1617598529_w856.jpg?type=w1600',
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MDVfMjgx/MDAxNjE3NjEzNTIwMDEx.6DowQgwBci7vP2En0BkudIhPJR5jze2G9MGrLsy5vK0g.Ml3IMTjDuz05LjBXiCet_pvWh-WF9G9QUOdZtkd7qp4g.JPEG/150773360_9_1617598529_w1100.jpg?type=w1600',
    curdate()
);

INSERT INTO `product_table` VALUES (null, 'Aa', '오픈장', 1, 45000, 
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MTdfNDcg/MDAxNjE4NjE2NzQyOTM2.p-TXGQ7WkwmHiOg5zPngf6kFTXwgCjH-kPrNNKyZEz4g.sYdTOE53RAToAAgSX0Gg6GuzIE2irJbZQuC3T1t54h4g.JPEG/KakaoTalk_20210414_143349197.jpg?type=w1600',
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MTdfODQg/MDAxNjE4NjE2NzQyOTQz.FPakO4gBnDArFUXB4UjO5ckv638tZesU6OILPCK-GF8g.5C-UsFFRs_WySbt_BODLytubqEIF3po_6AgKkmt678Mg.JPEG/KakaoTalk_20210414_143349197_01_%281%29.jpg?type=w1600',
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MTdfMTc3/MDAxNjE4NjE2NzQyOTQw.XteNe4COlvj8metjdyidmgn4PTPg8Q1x7nvcc6oWPgAg.Kc4AL3WWNMqQTYdFvnu4Tv5vgPcdz9EeCVnmRoVQCQ4g.JPEG/KakaoTalk_20210414_143349197_02_%281%29.jpg?type=w1600',
	null,
	null,
	null,
	null,
	null,
    curdate()
);

INSERT INTO `product_table` VALUES (null, 'Aa', '오픈장 선반', 2, 30000, 
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MTdfMTEx/MDAxNjE4NjE2NTg5NTEy.uz3eqzqTJO4W926FKkLFdVkU1NqZfE3sqjimL31IG_Ag.4ZZJum19QpowX5ghAV9729397Pe9ABYKAvtJ-G0ylmQg.JPEG/KakaoTalk_20210414_143227251_01.jpg?type=w1600',
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MTdfMjQ2/MDAxNjE4NjE2NTg5NTQx.W1V8WbRGyxWhJ3aX-JaRHnQN3v0JJhc9dFqHamGIgFkg.Hzbd2tcIjLMG77qLvOTzoOogiCU97Q2gqsdFbPTm7yIg.JPEG/KakaoTalk_20210414_143227251.jpg?type=w1600',
	null,
	null,
	null,
	null,
	null,
	null,
    curdate()
);

INSERT INTO `product_table` VALUES (null, 'Ba', '가죽 챙상', 1, 160000, 
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MTdfNzQg/MDAxNjE4NjE3MDAxODUw.-JthUAImEjYmL6z_tA-7Ex2JtWKaQixMU6Ik-Brpwuog.DyWfGEBj0UE1LoEx-3Tkn46PZ--Jl29vcruC_6CfkQIg.JPEG/KakaoTalk_20210414_143759657_04.jpg?type=w1600',
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MTdfNDYg/MDAxNjE4NjE3MDAxODYz._0I_O0QbsqzWPUqMnBoGo260LMRjFh80a4h_RmRyrcog.xv3UhCzRp1a-c6hoU-4DhXvGpox7cKZ2BjwJyoB2gMYg.JPEG/KakaoTalk_20210414_143759657_01.jpg?type=w1600',
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MTdfMjkw/MDAxNjE4NjE3MDAxODg1.z9GZ_agOaJ7XyMc0zuOffpc28NO6VLiJsw5y2NBbYGwg.Kx8BdIClIBsNx7KDw4CygdVr9LFB78sEORKHgbhI0vMg.JPEG/KakaoTalk_20210414_143759657_02.jpg?type=w1600',
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MTdfMjAx/MDAxNjE4NjE3MDAyMTk1.MvRNghpz-RrMCIYJKqN8DhSVIMzV0HhLKWaeFf_7oT4g.FE-Xwop-SU9hsebMtZ6-Q-CiQoiKRfFTjop9BSWGG5kg.JPEG/KakaoTalk_20210414_143759657_03.jpg?type=w1600',
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MTdfMTMg/MDAxNjE4NjE3MDAxODY5.p2V3cAfIyyyBjJVMHcSwNKWUinX-696czMzOHo-L3sog.MwFGHrNR60g8Qc72EQfKqTW1yJnm82UqUojDJ6AyvIgg.JPEG/KakaoTalk_20210414_143759657.jpg?type=w1600',
	null,
	null,
	null,
    curdate()
);

INSERT INTO `product_table` VALUES (null, 'Aa', '테이블', 2, 30000, 
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MTdfOCAg/MDAxNjE4NjE2ODg4NjIy.2iHmTtrKhIkuC-zIpbMGZVt-MGg88SLYqiGep0BGkOEg._9tCIdITjQKRQaABfCYdyig1ZK4LNHbJn925xl7JjLsg.JPEG/KakaoTalk_20210414_144207863_01.jpg?type=w1600',
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MTdfMjM5/MDAxNjE4NjE2ODg4NzA2.pajbaBv_JC8RCcERtXNdWEvVTV1SGlh14nNrJm85AWQg.fqjPOWSkqjfF1f9t0XiaMyOuNVD7_M2UBa7x0fs4Ud0g.JPEG/KakaoTalk_20210414_144207863.jpg?type=w1600',
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MTdfMTQx/MDAxNjE4NjE2ODg4Njc4.2yz5_YtZDHWXFl0Vo8x9TSp7OSE1INR09OlZrQpKMv4g.fkSKKxvveA7yJc5XKxVMBDJAuBaz6wgg5xVxV21n5Ncg.JPEG/KakaoTalk_20210414_144207863_02.jpg?type=w1600',
	null,
	null,
	null,
	null,
	null,
    curdate()
);


INSERT INTO `product_table` VALUES (null, 'Ca', '부엉이 조각상', 1, 100000, 
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MDVfMTc5/MDAxNjE3NjEzNDcyNDM3.GTnPcum-GyCgzC67PjkZfI7bLdm5q6N6BNiqp-78LQMg.fqaijFBdgMeQEaeN5hq7VI0scJXmdYLdox6w_Ehrwtgg.JPEG/150773511_1_1617598631_w1100.jpg?type=w1600',
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MDVfMjY2/MDAxNjE3NjEzNDcyNDM0.lLFE8LF_wDwPSXCHMeGOJhUiNTutuY-7OiwCD-WKZkwg.Svj5CvC0ltx9jDUuR_GoJIDwCybuj5a_1ENCAXiOlXgg.JPEG/150773511_2_1617598631_w1100.jpg?type=w1600',
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MDVfNTcg/MDAxNjE3NjEzNDcyNDIx.Y9vkPAr_4NSBSV4HuOv2A0b-8--1eZ50BjeaL28LolIg.AiQW_F3KERKrvshRvkaXRsKfV2jSHNQe1HkMzi65XHAg.JPEG/150773511_3_1617598631_w1100.jpg?type=w1600',
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MDVfNCAg/MDAxNjE3NjEzNDcyNDM2.ixzIwDe0sOvzmTknOJGQtp94qGQfoP1L6KuOg_nbS40g.ANDpkWkYjtnegBiiCBi6rkeVGQv2dNtk4T52kzT89OQg.JPEG/150773511_4_1617598631_w1100.jpg?type=w1600',
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MDVfMTA0/MDAxNjE3NjEzNDcyNDM3.IgV4yd33CJS_YUh4MrP5_unduqqhqMSqxYADjuzqO9og.Ou3xLANuJqXH9h7aIw8fR2sy1iPSAVeFqzhvaP0qPmsg.JPEG/150773511_5_1617598631_w1100.jpg?type=w1600',
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MDVfMTEy/MDAxNjE3NjEzNDcyNDQ1.cJ8-zV1_peNL22L0uGKnibQcKPpw8mp2NFTxqp4lELMg.Qz-goBCcUu81oYCj5cVJ3DDMHgEmGh96h2dgwi4xyokg.JPEG/150773511_6_1617598631_w1100.jpg?type=w1600',
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MDVfMTk1/MDAxNjE3NjEzNDcyNzcx.9Hd0P95_tfV0VhOeZ9rZ6Pj21yuP5LVanED-PFumu74g.ZYezxID__zkzpb1DK16Rnzy3bRjwrpak1x6-Wzg-nAog.JPEG/150773511_7_1617598631_w1100.jpg?type=w1600',
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MDVfMjUy/MDAxNjE3NjEzNDcyNzg0.xf47EuB21qPZMhB2gaFs6s86E-88ph6bKKesqzEdnDIg.jSGpDCbzfOKJvpQ3jcUWk9BlVC29lOy4jUurUgo4IS4g.JPEG/150773511_8_1617598631_w856.jpg?type=w1600',
    curdate()
);

INSERT INTO `product_table` VALUES (null, 'Aa', '나무 옷걸이 선반', 1, 200000, 
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MTNfODIg/MDAxNjE4Mjc0NDUwODk1.aMMBQrP2mvRAaP3BBvm3AF08Wr8bwz17d8hNjEtRQ1Ug.JWCT_4x4ewamJurv6SFH_AmGoVvP1090CKw2dWUnzXwg.JPEG/151224663_1_1618032579_w1100.jpg?type=w1600',
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MTNfMjY1/MDAxNjE4Mjc0NDUwODk1.BBsCesiCKjTYxfFzJRMHYVVFSUaRvd89GQPPul9nwsUg.zyNymei9-Z_3N2qmebpwzxz5XrXVEOhv8cGrBMzP-Jgg.JPEG/151224663_2_1618032579_w1100.jpg?type=w1600',
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MTNfMjQw/MDAxNjE4Mjc0NDUwOTAy.5b_e0vn1FW99QBoLuMIuL_Z4UQ6tJnohaoowC6Lr0f0g.8f5eMUVL_kDH_rmgkn9HNycrUb0RYdPfsyjVCECCiHQg.JPEG/151224663_3_1618032579_w1100.jpg?type=w1600',
	null,
	null,
	null,
	null,
	null,
    curdate()
);

INSERT INTO `product_table` VALUES (null, 'Ba', '수납 선반', 1, 300000, 
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MTNfMjYw/MDAxNjE4Mjc0MzU0MzQx.-3ZvtgeLyfzFH6WY951OzVOvdjoTevGMgowsYdIaJjIg.i0GQPGkJb0PEnSowiEw7kJHZWMj5DFyqi13VE4-fT70g.JPEG/151225358_1_1618032560_w1100.jpg?type=w1600',
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MTNfMzcg/MDAxNjE4Mjc0MzU0MzQw.Sc4PluiVOrJFXsHOTPbhZ5CTd2x-pAWRAgQbh6E01nAg.1VrWkMYLGXrlITNm9h80SjLESBF18jnsI5nrA703_9Yg.JPEG/151225358_2_1618032560_w1100.jpg?type=w1600',
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MTNfMjI0/MDAxNjE4Mjc0MzU0MzQz.BBM3ZBLTg1DTdYoTGVkKKbeGKZkD3biUTCHCm1MIEocg.BKDT_Ny4pHVnwrfUCiDXnyTcsQw6ZaQj8zZdklks7pog.JPEG/151225358_3_1618032560_w1100.jpg?type=w1600',
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MTNfMjQw/MDAxNjE4Mjc0MzU0MzUz.ik_FqVWWYMnU19xXbylmSohx3TN2f-zX9vKmvX8DZygg.9Kw1xNrW1iDdrHawSJOKuq_GslYmMxq6-Ut_mBY8X2gg.JPEG/151225358_4_1618032560_w1100.jpg?type=w1600',
	null,
	null,
	null,
	null,
    curdate()
);

INSERT INTO `product_table` VALUES (null, 'Da', '2015년 라셀르 냉장고', 1, 1500000, 
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MTNfMTY5/MDAxNjE4Mjc0ODM1OTkw.tPUQ7w4-RhAjWpev0aA_OTz87gNZ4drvfrtNdTfzeP8g.NngBjD5ma0Vopr6UvEdikpxTUP3CiIMUgUBqilYWulMg.JPEG/151218534_1_1618030930_w1100.jpg?type=w1600',
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MTNfMjk3/MDAxNjE4Mjc0ODM1OTgx.rW87etdWpt_h7tWkOGOcSxdFiMnMlbUXzwKUL4chFvog.gwbo9vuIEfZeXNudbi_1zXTYTyhQAVzzwNPLa5qC9Qgg.JPEG/151218534_2_1618030930_w1100.jpg?type=w1600',
	'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MTNfMTg3/MDAxNjE4Mjc0ODM2MDAx.vGlJA3V8zL__eNgxswifqrEYGVB8cpj52cYop5uu-jYg.Tz0NnRyvc62sIdqDq0Ksjmsay7sWz6yGzoEN3R-SRgQg.JPEG/151218534_3_1618030930_w856.jpg?type=w1600',
	null,
	null,
	null,
	null,
	null,
    curdate()
);

select * from `green_recycle_db`.`product_table`;
select * from `green_recycle_db`.`member_table`;

SELECT id, name FROM member_table WHERE `from`='naver' AND `id`='24240848';

-- select * from `green_recycle_db`.`product_table` where `category`="Aa" order by `date` ASC limit 5;
-- select * from `green_recycle_db`.`product_table` where `category`="Ab" order by `date` ASC limit 5;
-- select * from `green_recycle_db`.`product_table` where `category`="Ac" order by `date` ASC limit 5;
-- select * from `green_recycle_db`.`product_table` where `category`="Ad" order by `date` ASC limit 5;
-- select * from `green_recycle_db`.`product_table` where `category`="Ae" order by `date` ASC limit 5;
-- select * from `green_recycle_db`.`product_table` where `category`="Af" order by `date` ASC limit 5;
-- select * from `green_recycle_db`.`product_table` where `category`="Ag" order by `date` ASC limit 5;
-- select * from `green_recycle_db`.`product_table` where `category`="Ba" order by `date` ASC limit 5;
-- select * from `green_recycle_db`.`product_table` where `category`="Bb" order by `date` ASC limit 5;
-- select * from `green_recycle_db`.`product_table` where `category`="Ca" order by `date` ASC limit 5;
-- select * from `green_recycle_db`.`product_table` where `category`="Da" order by `date` ASC limit 5;
-- select * from `green_recycle_db`.`product_table` where `category`="Db" order by `date` ASC limit 5;
-- select * from `green_recycle_db`.`product_table` where `category`="Dc" order by `date` ASC limit 5;
-- select * from `green_recycle_db`.`product_table` where `category`="Dd" order by `date` ASC limit 5;
-- select * from `green_recycle_db`.`product_table` where `category`="De" order by `date` ASC limit 5;
-- select * from `green_recycle_db`.`product_table` where `category`="Ea" order by `date` ASC limit 5;
-- select * from `green_recycle_db`.`product_table` where `category`="Fa" order by `date` ASC limit 5;
-- select * from `green_recycle_db`.`product_table` where `category`="Fb" order by `date` ASC limit 5;
-- select * from `green_recycle_db`.`product_table` where `category`="Ga" order by `date` ASC limit 5;
-- select * from `green_recycle_db`.`product_table` where `category`="Gb" order by `date` ASC limit 5;
-- select * from `green_recycle_db`.`product_table` where `category`="Gc" order by `date` ASC limit 5;
-- select * from `green_recycle_db`.`product_table` where `category`="Gd" order by `date` ASC limit 5;
-- select * from `green_recycle_db`.`product_table` where `category`="Ha" order by `date` ASC limit 5;
-- select * from `green_recycle_db`.`product_table` where `category`="Hb" order by `date` ASC limit 5;
-- select * from `green_recycle_db`.`product_table` where `category`="Ia" order by `date` ASC limit 5;