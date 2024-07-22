<section class="propertyinfo">
  <div class="rooms-title__wrap">
    <h2 class="property-info">敷金・礼金・物件情報など</h2>
  </div>
  <table class="property-info__table">
    <tr>
      <th class="property-name">種類</th>
      <td><?php echo !empty(CFS()->get('kinds_item')) ? CFS()->get('kinds_item') : '情報がありません'; ?></td>
    </tr>
    <tr>
      <th class="property-name">所在地</th>
      <td><?php echo !empty(CFS()->get('location')) ? CFS()->get('location') : '情報がありません'; ?></td>
    </tr>
    <tr>
      <th class="property-name">交通</th>
      <td><?php echo !empty(CFS()->get('traffic')) ? CFS()->get('traffic') : '情報がありません'; ?></td>
    </tr>
    <tr>
      <th class="property-name">家賃</th>
      <td><?php echo !empty(CFS()->get('rent')) ? CFS()->get('rent') : '情報がありません'; ?></td>
    </tr>
    <tr>
      <th class="property-name">敷金</th>
      <td><?php echo !empty(CFS()->get('security_deposit')) ? CFS()->get('security_deposit') : '情報がありません'; ?></td>
    </tr>
    <tr>
      <th class="property-name">礼金</th>
      <td><?php echo !empty(CFS()->get('key_money')) ? CFS()->get('key_money') : '情報がありません'; ?></td>
    </tr>
    <tr>
      <th class="property-name">建物構造</th>
      <td><?php echo !empty(CFS()->get('building_structure')) ? CFS()->get('building_structure') : '情報がありません'; ?></td>
    </tr>
    <tr>
      <th class="property-name">築年</th>
      <td><?php echo !empty(CFS()->get('Yearof_construction')) ? CFS()->get('Yearof_construction') : '情報がありません'; ?></td>
    </tr>
    <tr>
      <th class="property-name">専有面積</th>
      <td><?php echo !empty(CFS()->get('Exclusive_area')) ? CFS()->get('Exclusive_area') : '情報がありません'; ?></td>
    </tr>
    <tr>
      <th class="property-name">間取り詳細</th>
      <td><?php echo !empty(CFS()->get('Floor_plan_details')) ? CFS()->get('Floor_plan_details') : '情報がありません'; ?></td>
    </tr>
    <tr>
      <th class="property-name">保証会社</th>
      <td><?php echo !empty(CFS()->get('Guarantee_company')) ? CFS()->get('Guarantee_company') : '情報がありません'; ?></td>
    </tr>
    <tr>
      <th class="property-name">住宅保険</th>
      <td><?php echo !empty(CFS()->get('home_insurance')) ? CFS()->get('home_insurance') : '情報がありません'; ?></td>
    </tr>
    <tr>
      <th class="property-name">駐車場</th>
      <td>
        <?php
        $parking = CFS()->get('parking');
        if (!empty($parking)) {
          foreach ($parking as $key => $label) {
            echo esc_html($label) . '<br>';
          }
        } else {
          echo '情報がありません';
        }
        ?>
      </td>
    </tr>
    <tr>
      <th class="property-name">入居可能時期</th>
      <td>
        <?php echo !empty(CFS()->get('Available_period to_movein')) ? CFS()->get('Available_period to_movein') : '情報がありません'; ?>
      </td>
    </tr>
    <tr>
      <th class="property-name">リノベーション</th>
      <td>
        <?php
        $renovation = CFS()->get('renovation');
        if (!empty($renovation)) {
          foreach ($renovation as $key => $label) {
            echo esc_html($label) . '<br>';
          }
        } else {
          echo '情報がありません';
        }
        ?>
      </td>
    </tr>
    <tr>
      <th class="property-name">設備</th>
      <td><?php echo !empty(CFS()->get('Facility')) ? CFS()->get('Facility') : '情報がありません'; ?></td>
    </tr>
    <tr>
      <th class="property-name">条件等</th>
      <td><?php echo !empty(CFS()->get('Conditions_etc')) ? CFS()->get('Conditions_etc') : '情報がありません'; ?></td>
    </tr>
  </table>
  <div class="caution">
    <p><span>※</span>
      <?php echo !empty(CFS()->get('attention')) ? CFS()->get('attention') : '情報がありません'; ?>
    </p>
  </div>
</section>