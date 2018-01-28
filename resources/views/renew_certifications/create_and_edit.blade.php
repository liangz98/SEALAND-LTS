@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-edit"></i> 认证续期申请
					<a href="{{ $trainingDefaultFile }}" class="btn btn-success pull-right">申请表下载</a>
                </h1>
            </div>

            @include('common.error')

            <div class="panel-body">
				<form class="form-horizontal" action="{{ route('renew_certifications.store') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="panel panel-default">
						<div class="panel-body">
							<h2>Attestation  宣誓书</h2>
							<p>
								By submitting this form I attest that I: <br>
								提交本表格代表本人在此宣誓：
							</p>
							<p>
								1.  Recognize and acknowledge that the proper control of corrosion can be critical to the safety and welfare of the general public and industrial facilities.<br>
								正确的涂装检查对公众和工业设施的安全和繁荣是至关重要的。
							</p>
							<p>
								2.  Recognize and acknowledge that the control of corrosion is obligatory to maximize conservation of our material resources, to reduce economic losses, and to protect the environment.<br>
								涂装检查有义务使我们的材料资源得到最大的保护，并减少经济损失。
							</p>
							<p>
								3.  Recognize and acknowledge that the entire field of corrosion and its control encompasses the application of the knowledge and experience of many diverse disciplines and levels of technical competence which must often be consulted.<br>
								涂装的整个领域，包含许多不同的技巧和纪律以及技术水平，这些都必须经常考虑。
							</p>
							<p>
								4.  Recognize and acknowledge that only through continual association and cooperation with others in this field can the safest and most economical solutions be found to the many corrosion problems.<br>
								通过与涂装领域内其他人员的长期联系和密切合作，可为许多类型的涂料问题找到最安全和最经济的解决方案。
							</p>
							<p>
								5.  Recognize and acknowledge that the quality of my work reflects on the entire profession of corrosion control.<br>
								每个涂装检查员的工作质量和个人行为会为整个涂装检查行业带来影响。
							</p>
							<br>
							<p>
								For these reasons I:<br>
								因此，我在此同意：
							</p>
							<p>
								1.  Agree to give first consideration in my corrosion work to public safety and welfare and to protection of the environment.<br>
								在我的涂装检查工作中，将安全和公众放在第一位。
							</p>
							<p>
								2.  Agree to apply myself with diligence and responsibility to the corrosion work that lies within my area of competence.<br>
								尽心、尽职致力于我的涂装检查工作。
							</p>
							<p>
								3.  Agree to pursue my work with fairness, honesty, integrity and courtesy, ever mindful of the best interests of the public, my employer, and of fellow workers.<br>
								本着公正、诚实、廉公和周到的态度开展我都工作，并牢记公众、雇主和合作工人的最大利益。
							</p>
							<p>
								4.  Agree to not represent myself to be proficient or make recommendations in phases of corrosion work in which I am not qualified by knowledge and experience.<br>
								对于不具备知识和经验的涂装相关工作，不代表本人精通该行业或可做任何建议。
							</p>
							<p>
								5.  Agree to avoid and discourage untrue, sensational, exaggerated, and/or unwarranted statements regarding my work in oral presentations, written text, and/or advertising media.<br>
								避免和阻止任何不真实、凭感觉、言过其实或无根据的有关工作的陈述。
							</p>
							<p>
								6.  Agree to treat as confidential my knowledge of the business affairs and/or technical process of clients, employers, or customers when their interests so require.<br>
								对我所知的有关客户、雇主或顾客的商业事务或技术程序保密。
							</p>
							<p>
								7.  Agree to inform clients or employers of any business affiliations, interests, and/or connections which might influence my judgment.<br>
								将可能会影响我作出决定的任何从属关系、利益或人际关系告知客户或雇主。
							</p>
							<p>
								8.  Agree to uphold, foster and contribute to the achievement of the objectives of NACE International.<br>
								支持、促进并投身于NACE国际目标的实现。
							</p>
							<br>
							<p>
								I understand that my failure to comply with these requirements could result in disciplinary action.<br>
								我理解，我不遵守以上要求可能会导致纪律处分。
							</p>
							<br>
							<p>
								APPLICANT'S AFFIDAVIT<br>
								申请人保证书
							</p>
							<p>
								I certify that all information I have provided in order to apply for NACE certification is true, complete and correct. I understand that any information provided by me that is found to be false, incomplete or misrepresented in any respect will be sufficient cause to cancel further consideration of this application. I expressly authorize, without reservation, NACE, its representatives, or employees to contact and obtain information from all references (personal and professional), employers, public agencies, licensing authorities and educational institutions and to otherwise verify the accuracy of all information provided by me in this application. I hereby waive any and all rights and claims I may have regarding NACE, its agents, employees or representatives, for seeking, gathering and using such information in the certification process and all other persons, corporations or organizations for furnishing such information about me.<br>
								本人保证我所提供申请NACE认证的所有信息是真实的、完整的和准确的。我理解任何我提供的信息，如被发现在任何方面是错误的、不完整的或歪曲事实的，将足以导致取消将来对本申请的考虑。我明确授权NACE代表或员工无需预约就可以联系用人单位、公共机构、发证机构和教育机构，并从所有经历证明中获取信息（个人的和专业的），以及验证本人在本申请表内提供的所有信息的真实性。我特此放弃我可能拥有的任何所有权和索赔权，同意NACE及其代理人、员工或代表，寻找、收集和使用在认证过程中的信息，以及所有其他人、公司或组织提供的有关我的信息。
							</p>

							<div class="checkbox">
								<label>
									<input type="checkbox" checked> <b>我同意</b>
								</label>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="number-field" class="col-sm-2 control-label">CIP 认证号</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="number" id="number-field" value="{{ old('number', $renew_certification->number ) }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="level-field" class="col-sm-2 control-label">CIP 级别</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="level" id="level-field" value="{{ old('level', $renew_certification->level ) }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="expired_date-field" class="col-sm-2 control-label">到期日</label>
						<div class="col-sm-9">
							<input class="form-control" type="date" name="expired_Date" id="expired_date-field" value="{{ old('expired_date', $renew_certification->expired_date ) }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="user_name-field" class="col-sm-2 control-label">用户名</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="user_name" id="user_name-field" value="{{ old('user_name', $renew_certification->user_name ) }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="user_password-field" class="col-sm-2 control-label">密码</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="user_password" id="user_password-field" value="{{ old('user_password', $renew_certification->user_password ) }}" />
						</div>
					</div>
					{{--
					<div class="form-group">
						<label for="first_name-field" class="col-sm-2 control-label">名</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="first_name" id="first_name-field" value="{{ old('first_name', $renew_certification->first_name ) }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="last_name-field" class="col-sm-2 control-label">姓</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="last_name" id="last_name-field" value="{{ old('last_name', $renew_certification->last_name ) }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="birth_date-field" class="col-sm-2 control-label">出生日期</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="birth_date" id="birth_date-field" value="{{ old('birth_date', $renew_certification->birth_date ) }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="person_address-field" class="col-sm-2 control-label">家庭地址</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="person_address" id="person_address-field" value="{{ old('person_address', $renew_certification->person_address ) }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="person_city-field" class="col-sm-2 control-label">城市</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="person_city" id="person_city-field" value="{{ old('person_city', $renew_certification->person_city ) }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="person_province-field" class="col-sm-2 control-label">省份</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="person_province" id="person_province-field" value="{{ old('person_province', $renew_certification->person_province ) }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="person_zip_code-field" class="col-sm-2 control-label">邮政编码</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="person_zip_code" id="person_zip_code-field" value="{{ old('person_zip_code', $renew_certification->person_zip_code ) }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="person_country-field" class="col-sm-2 control-label">国家</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="person_country" id="person_country-field" value="{{ old('person_country', $renew_certification->person_country ) }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="person_email-field" class="col-sm-2 control-label">个人邮箱</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="person_email" id="person_email-field" value="{{ old('person_email', $renew_certification->person_email ) }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="person_phone-field" class="col-sm-2 control-label">手机</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="person_phone" id="person_phone-field" value="{{ old('person_phone', $renew_certification->person_phone ) }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="work_address-field" class="col-sm-2 control-label">公司地址</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="work_address" id="work_address-field" value="{{ old('work_address', $renew_certification->work_address ) }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="work_city-field" class="col-sm-2 control-label">城市</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="work_city" id="work_city-field" value="{{ old('work_city', $renew_certification->work_city ) }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="work_province-field" class="col-sm-2 control-label">省份</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="work_province" id="work_province-field" value="{{ old('work_province', $renew_certification->work_province ) }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="work_zip_code-field" class="col-sm-2 control-label">邮政编码</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="work_zip_code" id="work_zip_code-field" value="{{ old('work_zip_code', $renew_certification->work_zip_code ) }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="work_country-field" class="col-sm-2 control-label">国家</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="work_country" id="work_country-field" value="{{ old('work_country', $renew_certification->work_country ) }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="work_email-field" class="col-sm-2 control-label">个人邮箱</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="work_email" id="work_email-field" value="{{ old('work_email', $renew_certification->work_email ) }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="work_phone-field" class="col-sm-2 control-label">工作电话</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="work_email" id="work_phone-field" value="{{ old('work_phone', $renew_certification->work_phone ) }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="work_type-field" class="col-sm-2 control-label">工作类型</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="work_type" id="work_type-field" value="{{ old('work_type', $renew_certification->work_type ) }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="company_name-field" class="col-sm-2 control-label">公司全称</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="company_name" id="company_name-field" value="{{ old('company_name', $renew_certification->company_name ) }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="from_date-field" class="col-sm-2 control-label">开始年月</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="from_date" id="from_date-field" value="{{ old('from_date', $renew_certification->from_date ) }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="to_date-field" class="col-sm-2 control-label">结束年月（在职请留空）</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="to_date" id="to_date-field" value="{{ old('to_date', $renew_certification->to_date ) }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="company_address-field" class="col-sm-2 control-label">公司地址</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="company_address" id="company_address-field" value="{{ old('company_address', $renew_certification->company_address ) }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="company_city-field" class="col-sm-2 control-label">城市</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="company_city" id="company_city-field" value="{{ old('company_city', $renew_certification->company_city ) }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="company_province-field" class="col-sm-2 control-label">省份</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="company_province" id="company_province-field" value="{{ old('company_province', $renew_certification->company_province ) }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="company_zip_code-field" class="col-sm-2 control-label">邮政编码</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="company_zip_code" id="company_zip_code-field" value="{{ old('company_zip_code', $renew_certification->company_zip_code ) }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="company_country-field" class="col-sm-2 control-label">国家</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="company_country" id="company_country-field" value="{{ old('company_country', $renew_certification->company_country ) }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="title-field" class="col-sm-2 control-label">工作职务</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="title" id="title-field" value="{{ old('title', $renew_certification->title ) }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="description-field" class="col-sm-2 control-label">工作描述</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="description" id="description-field" value="{{ old('description', $renew_certification->description ) }}" />
						</div>
					</div>
--}}

					<div class="form-group">
						<label for="application_form-field" class="col-sm-2 control-label">申请表</label>
						<div class="col-sm-9">
							<input type="file" name="application_form">
							<p class="help-block">将填好的申请表上传。</p>
						</div>
					</div>


					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-primary">提交</button>
						</div>
					</div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection